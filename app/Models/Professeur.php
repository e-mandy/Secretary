<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professeur extends Model
{
    protected $fillable =[
        'lastname',
        'firstname',
        'email',
        'phone',
        'specialite',
        'status'
    ];

    public function documents(): HasMany{
        return $this->hasMany(Document::class, 'id_professor');
    }

    public function getNbrDocsAttribute(){
        return $this->documents()->count();
    }

    public function getProfCreatedAtAttribute(){
        //On définit la langue
        Carbon::setLocale('fr');

        //On convertit la date générée par created_at
        $date = Carbon::parse($this->created_at);

        //On met au format lisible en iso
        return $date->isoFormat('D MMMM YYYY');
    }

    public function getProfCreatedAtLowFormatAttribute(){
        $date = Carbon::parse($this->created_at);
        return $date->isoFormat('DD/MM/YYYY');
    }

}
