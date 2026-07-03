<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;

    protected $table = 'dons';

    protected $fillable = [
        'membre_id',
        'montant',
        'type',
        'objectif',
        'date_don',
        'est_anonyme',
        'methode_paiement',
        'statut',
        'notes',
    ];

    protected $casts = [
        'montant' => 'decimal:2',
        'est_anonyme' => 'boolean',
        'date_don' => 'date',
    ];

    public function membre()
    {
        return $this->belongsTo(Membre::class, 'membre_id');
    }

    public function getNomAffichageAttribute()
    {
        return $this->est_anonyme ? 'Donateur anonyme' : ($this->membre?->nom_complet ?? 'Invité');
    }
}