<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePVSoutenanceRequest;
use App\Models\Filiere;
use App\Models\PVSoutenance;
use Illuminate\Http\Request;

class PVSoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pv_soutenance.index');
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
    public function store(StorePVSoutenanceRequest $request)
    {
        $validateFields = $request->validated();

        if($request->hasFile('pv_file')){
            $filiere_name = Filiere::where('id', $request->id_filiere)->pluck('nom');
            $file = $request->file('pv_file');
            $file_ext = $file->getClientOriginalExtension();
            $filename = "{$validateFields['nom_etu']}_{$filiere_name}.{$file_ext}";
        }

        PVSoutenance::create([
            ...$validateFields,
            "pv_file" => $filename
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
