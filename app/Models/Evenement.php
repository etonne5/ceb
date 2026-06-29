<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evenement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'evenements';

    protected $fillable = [
        'titre',
        'description',
        'date_debut',
        'date_fin',
        'lieu',
        'image',
        'max_participants',
        'statut',
        'categorie',
        'est_public',
        'necessite_inscription',
        'tarif',
    ];

    protected $casts = [
        'date_debut' => 'datetime',
        'date_fin' => 'datetime',
        'est_public' => 'boolean',
        'necessite_inscription' => 'boolean',
    ];

    public function inscriptions()
    {
        return $this->hasMany(InscriptionEvenement::class, 'evenement_id');
    }

    public function getNombreInscritsAttribute()
    {
        return $this->inscriptions()->where('statut', 'inscrit')->sum('nombre_invites');
    }

    public function getPlacesDisponiblesAttribute()
    {
        if (!$this->max_participants) {
            return null;
        }
        return max(0, $this->max_participants - $this->nombre_inscrits);
    }
}