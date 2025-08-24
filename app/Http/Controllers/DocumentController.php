<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Professeur;
use App\Models\Type;

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
            $filename = "{$prof_info->lastname}_{$prof_info->firstname}_{$request->type}.{$file->getClientOriginalExtension()}";

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
