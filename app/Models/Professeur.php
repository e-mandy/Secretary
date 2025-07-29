<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
