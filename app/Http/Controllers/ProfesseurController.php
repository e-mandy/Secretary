<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesseurRequest;
use App\Http\Requests\UpdateProfesseurRequest;
use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('professeur.index',
        [
            'professeurs' => Professeur::all(),
            'prof_count' => Professeur::count(),
            'prof_incomplet' => Professeur::where('status', "Incomplet")->count()
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
    public function store(StoreProfesseurRequest $request)
    {
        $validate = $request->validated();


        Professeur::create([
            ...$validate,
            'status' => "Incomplet"
        ]);

        return redirect('/admin/professeurs')->with('success', "Nouveau professeur ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        return view('professeur.show', $professeur);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        return view('professeur.edit', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesseurRequest $request, Professeur $professeur)
    {
        $validated_fields = $request->validated();

        $professeur->update([
            ...$validated_fields,
            'status' => "Incomplet",
        ]);

        return to_route('admin.professeurs.index')->with('success', "Nouveau professeur ajouté");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {
        $professeur->delete();

        return redirect()->route('admin.professeurs.index')->with('success', "Professeur supprimé avec succès");
    }
}
