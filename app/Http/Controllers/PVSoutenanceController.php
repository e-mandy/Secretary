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
            $target_filiere = Filiere::select('nom')->where('id', $request->id_filiere)->first();
            $file = $request->file('pv_file');
            $file_ext = $file->extension();
            $filename = str_replace(" ", "", "{$validateFields['nom_etu']}_{$target_filiere->nom}.{$file_ext}");

            $file->storeAs('pv_soutenances', $filename, 'public');

            $created_pv->update([
                "pv_file" => $filename
            ]);
        }

        flash()->success("Ajout du pv de soutenance éffectué avec succès");

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

        $pv_soutenance->update([
            ...$validatedUpdateFields,
            'mention' => $mention
        ]);

        if($request->hasFile('pv_file')){
            $target_filiere = Filiere::select('nom')->where('id', $request->id_filiere)->first();

            $file = $request->file('pv_file');
            $file_ext = $file->extension();
            $filename = str_replace(" ", "", "{$validatedUpdateFields['nom_etu']}_{$target_filiere->nom}.{$file_ext}");

            // Delete previous file if any
            if(!empty($last_filename)){
                Storage::disk('public')->delete("pv_soutenances/{$last_filename}");
            }

            // Always store the new file on the public disk under pv_soutenances
            $file->storeAs('pv_soutenances', $filename, 'public');

            $pv_soutenance->update([
                "pv_file" => $filename
            ]);
        }

        flash()->success('Modification du pv de soutenance éffectuée avec succès');

        return to_route('admin.pv_soutenance.index');

    }

    public function download(PVSoutenance $pv_soutenance){
        $path = Storage::disk('public')->path("pv_soutenances/{$pv_soutenance->pv_file}");

        return response()->download($path);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelsPvSoutenance $pv_soutenance)
    {
        if(!empty($pv_soutenance->pv_file)){
            Storage::disk('public')->delete("/pv_soutenances/{$pv_soutenance->pv_file}");
        }
        $pv_soutenance->delete();

        flash()->success('Suppressiond de soutenance effectuée avec succès');

        return redirect()->route('admin.pv_soutenance.index');
    }
}
