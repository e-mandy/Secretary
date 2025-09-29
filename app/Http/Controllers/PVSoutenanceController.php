<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePVSoutenanceRequest;
use App\Http\Requests\UpdatePVSoutenanceRequest;
use App\Models\Filiere;
use App\Models\PVSoutenance;
use App\Models\PvSoutenance as ModelsPvSoutenance;
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

        $mention = "";

        switch(true){
            case($request->note >= 10 && $request->note < 12):
                $mention = "passable";
                break;

            case($request->note >= 12 && $request->note < 14):
                $mention = "abien";
                break;

            case($request->note >= 14 && $request->note < 16):
                $mention = "bien";
                break;

            case($request->note >= 16 && $request->note < 20):
                $mention = "tbien";
                break;
        }


        $created_pv = PVSoutenance::create([
            ...$validateFields,
            'mention' => $mention
        ]);



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
    public function edit(PVSoutenance $pv_soutenance)
    {
        return view('pv_soutenance.edit', [
            'pv_soutenance' => $pv_soutenance,
            'filieres' => Filiere::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePVSoutenanceRequest $request, PVSoutenance $pv_soutenance)
    {
        $validatedUpdateFields = $request->validated();
        $last_filename = $pv_soutenance->pv_file == null ? '' : $pv_soutenance->pv_file;

        $mention = "";

        switch(true){
            case($request->note >= 10 && $request->note < 12):
                $mention = "passable";
                break;

            case($request->note >= 12 && $request->note < 14):
                $mention = "abien";
                break;

            case($request->note >= 14 && $request->note < 16):
                $mention = "bien";
                break;

            case($request->note >= 16 && $request->note < 20):
                $mention = "tbien";
                break;
        }

        $updated_pv = $pv_soutenance->update([
            ...$validatedUpdateFields,
            'mention' => $mention
        ]);

        if($request->hasFile('pv_file')){
            $filiere_name = Filiere::where('id', $request->id_filiere)->pluck('nom');
            $file = $request->file('pv_file');
            $file_ext = $file->getClientOriginalExtension();
            $filename = "{$validatedUpdateFields['nom_etu']}_{$filiere_name}.{$file_ext}";

            Storage::move($last_filename, $filename);

            $updated_pv->update([
                "pv_file" => $filename
            ]);
        }

        return to_route('admin.pv_soutenance.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelsPvSoutenance $pv_soutenance)
    {
        //
    }
}
