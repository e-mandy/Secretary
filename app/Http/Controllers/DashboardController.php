<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Professeur;
use App\Models\PvSoutenance;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // Nombre de professeurs
        $nbr_prof = Professeur::count();
        // Recupérer le dernier professesur de la liste des professeurs
        $last_prof = Professeur::latest('created_at')->first();
        // Récupérer les profs les plus récents
        $recent_profs = $this->check_last_activities(Professeur::class);


        // Nombre de documents
        $nbr_document = Document::count();
        // Récupérer le dernier document de la liste de document
        $last_doc = Document::latest('created_at')->first();
        // Récupérer les documents récents
        $recent_docs = $this->check_last_activities(Document::class);

        // Nombre de pv de soutenance
        $nbr_pv_soutenance = PvSoutenance::count();
        // Récupérer le dernier pv de soutenance de la liste de pv de soutenance
        $last_pv_soutenance = PvSoutenance::latest('created_at')->first();
        // Récupérer les pv les plus récents
        $recent_pvs = $this->check_last_activities(PVSoutenance::class);

        $document = [
            "number" => $nbr_document,
            "last_change" => $this->get_last_change($last_doc->created_at),
            "recents" => $recent_docs
        ];

        $prof = [
            "number" => $nbr_prof,
            "last_change" => $this->get_last_change($last_prof->created_at),
            "recents" => $recent_profs
        ];

        $pv_soutenance = [
            "number" => $nbr_pv_soutenance,
            "last_change" => $this->get_last_change($last_pv_soutenance->created_at),
            "recents" => $recent_pvs
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

    private function check_last_activities(string $model){
        $since_two_week = Carbon::now()->subDays(30);

        $data_infos = [];
        $output_data = [];

        $datas = $model::where('created_at', ">", $since_two_week)->limit(2)->get();

        if($datas->isEmpty()) return null;

        foreach($datas as $data){

            if($data->created_at > $data->updated_at){
                $data_infos['recent_activity'] = $this->get_last_change($data->created_at);
                $data_infos['message'] = `Nouveau {class_basename($model)} ajouté(e)`;
            }else{
                $data_infos['recent_activity'] = $this->get_last_change($data->updated_at);
                $data_infos['message'] = `{class_basename($model)} mis à jour`;
            }
            $data_infos['value'] = $data;

            $output_data[] = $data_infos;
        }

        return $output_data;
    }
}
