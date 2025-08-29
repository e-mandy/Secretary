<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PvSoutenance extends Model
{
    protected $fillable = [
        "nom_etu",
        "soutenance_date",
        "heure",
        "jurys",
        "note",
        "mention",
        "pv_file",
        "id_filiere"
    ];


    public function filiere(): BelongsTo
    {
        return $this->belongsTo(Filiere::class, 'id_filiere', 'id');
    }
}
