<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benevole extends Model
{
    use HasFactory;

    protected $table = 'benevoles';

    protected $fillable = [
        'membre_id',
        'poste',
        'date_debut',
        'date_fin',
        'est_actif',
        'competences',
        'disponibilite',
    ];

    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
        'est_actif' => 'boolean',
    ];

    public function membre()
    {
        return $this->belongsTo(Membre::class, 'membre_id');
    }
}