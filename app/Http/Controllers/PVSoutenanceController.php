<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePVSoutenanceRequest;
use App\Models\Filiere;
use App\Models\PVSoutenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PVSoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pv = PvSoutenance::all();
        return view('pv_soutenance.index', [
            "pv_soutenances" => $pv,
            "nbr_pv" => PVSoutenance::all()->count(),
            "filieres" => Filiere::all()
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
    public function store(StorePVSoutenanceRequest $request)
    {
        $validateFields = $request->validated();


        $created_pv = PVSoutenance::create(
            $validateFields,
        );



        if($request->hasFile('pv_file')){
            $filiere_name = Filiere::where('id', $request->id_filiere)->pluck('nom');
            $file = $request->file('pv_file');
            $file_ext = $file->getClientOriginalExtension();
            $filename = "{$validateFields['nom_etu']}_{$filiere_name}.{$file_ext}";

            $file->storeAs('pv_soutenances', $filename, 'public');

            $created_pv->update([
                "pv_file" => $filename
            ]);
        }

        return to_route('admin.pv_soutenance.index')->with(['success' => "PV crée avec succès"]);
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
