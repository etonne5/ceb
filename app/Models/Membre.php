<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membre extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'membres';

    protected $fillable = [
        'user_id',
        'prenom',
        'nom',
        'telephone',
        'adresse',
        'ville',
        'code_postal',
        'date_bapteme',
        'date_confirmation',
        'date_naissance',
        'statut',
        'notes',
        'avatar',
    ];

    protected $casts = [
        'date_bapteme' => 'date',
        'date_confirmation' => 'date',
        'date_naissance' => 'date',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dons()
    {
        return $this->hasMany(Don::class, 'membre_id');
    }

    public function prieres()
    {
        return $this->hasMany(Priere::class, 'membre_id');
    }

    public function benevole()
    {
        return $this->hasOne(Benevole::class, 'membre_id');
    }

    public function inscriptionsEvenements()
    {
        return $this->hasMany(InscriptionEvenement::class, 'membre_id');
    }

    // Attribut personnalisé
    public function getNomCompletAttribute()
    {
        return trim(($this->prenom ?? '') . ' ' . ($this->nom ?? ''));
    }
}