<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Professeur;
use App\Models\PvSoutenance;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // Nombre de professeurs
        $nbr_prof = Professeur::count();

        // Nombre de documents
        $nbr_document = Document::count();

        // Nombre de pv de soutenance
        $nbr_pv_soutenance = PvSoutenance::count();

        // Récupérer le dernier document de la liste de document
        $last_doc = Document::latest('created_at')->first();

        // Recupérer le dernier professesur de la liste des professeurs
        $last_prof = Professeur::latest('created_at')->first();

        // Récupérer le dernier pv de soutenance de la liste de pv de soutenance
        $last_pv_soutenance = PvSoutenance::latest('created_at')->first();


        $document = [
            "number" => $nbr_document,
            "last_change" => $this->get_last_change($last_doc->created_at)
        ];

        $prof = [
            "number" => $nbr_prof,
            "last_change" => $this->get_last_change($last_prof->created_at)
        ];

        $pv_soutenance = [
            "number" => $nbr_pv_soutenance,
            "last_change" => $this->get_last_change($last_pv_soutenance->created_at)
        ];

        return view('dashboard', [
            'document' => $document,
            'prof' => $prof,
            'pv_soutenance' => $pv_soutenance
        ]);
    }

    private function get_last_change(DateTime $date){
        if(!$date){
            return "";
        }
        Carbon::setLocale('fr');

        $moment = Carbon::parse($date);

        return $moment->diffForHumans(['options' => Carbon::NO_ZERO_DIFF]);
    }

    private function check_last_activities(){

    }
}
