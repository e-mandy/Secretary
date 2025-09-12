<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $fillable = [
        'nom',
        'type_id',
        'id_professor'
    ];

    public function professeur(): BelongsTo
    {
        return $this->belongsTo(Professeur::class, 'id_professor');
    }

    public function getDateCreatedAtAttribute(){
        $date = Carbon::parse($this->created_at);
        return $date->isoFormat('DD/MM/YYYY');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
