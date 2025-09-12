<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Professeur;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('document.index', [
            'documents' => Document::all(),
            'doc_amount' => Document::all()->count(),
            'types' => Type::all(),
            'profs' => Professeur::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        if($request->hasFile('document')){
            $file = $request->file('document');

            $prof_info = Professeur::where('id', $request->id_professeur)->first(['lastname', 'firstname']);
            $prof_type_doc = Type::select('nom')->where('id', $request->type_id)->first()['nom'];

            $filename = str_replace(" ", "", "{$prof_info->lastname}_{$prof_info->firstname}_{$prof_type_doc}.{$file->extension()}");

            Document::create([
                'nom' => $filename,
                'id_professor' => $request->id_professeur,
                'type_id' => $request->type_id
            ]);

            $file->storeAs('documents', $filename, 'public');

            return to_route('admin.documents.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('document.edit', [
            'document' => $document,
            'types' => Type::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $validated = $request->validated();

        $document->update([
            "type_id" => $validated['type_id'],
        ]);

        if($request->hasFile('document')){
            $last_stored_file = Storage::get($document->nom);
            $extension = pathinfo($last_stored_file, PATHINFO_EXTENSION);

            $striping_last_filename = explode(".{$extension}", $document->nom);

            $new_filename = str_replace(" ", "", "{$striping_last_filename[0]}.{$request->file('document')->extension()}");

            Storage::disk('public')->delete("documents/{$document->nom}");
            $document->update([
                'nom' => $new_filename
            ]);

            $request->file('document')->storeAs('documents', $new_filename, 'public');
        }

        return to_route('admin.documents.index');
    }

    /**
     * Download the specified document from the storage
     */
    public function download(Document $document){
        $path = storage_path("app/public/documents/$document->nom");

        return response()->download($path);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        Storage::disk('public')->delete("documents/{$document->nom}");
        $document->delete();

        return redirect()->route('admin.documents.index')->with('status', "Document supprimé avec succès");
    }
}
