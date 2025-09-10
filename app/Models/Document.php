<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Document extends Model
{
    protected $fillable = [
        'nom',
        'type_id',
        'size',
        'extension',
        'id_professor'
    ];

    public function professeur(): BelongsTo
    {
        return $this->belongsTo(Professeur::class, 'id_professor', 'id');
    }

    public function getDateCreatedAtAttribute(){
        $date = Carbon::parse($this->created_at);
        return $date->isoFormat('DD/MM/YYYY');
    }

    public function type(): HasOne
    {
        return $this->hasOne(Type::class, 'type_id', 'id');
    }
}
