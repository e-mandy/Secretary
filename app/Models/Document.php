<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Document extends Model
{
    protected $fillable = [
        'nom',
        'type',
        'size',
        'extension',
        'id_professeur'
    ];


    public function professeur(): HasOne{
        return $this->hasOne(Professeur::class, 'id_professeur');
    }
}
