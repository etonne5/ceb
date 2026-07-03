<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Messe extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'messes';

    protected $fillable = [
        'titre',
        'heure_debut',
        'heure_fin',
        'jour',
        'lieu',
        'type',
        'nom_pretre',
        'capacite',
        'description',
        'est_public',
    ];

    // Exemple d'accessor (libellé jour)
    public function getJourLibelleAttribute()
    {
        return $this->jour;
    }
}