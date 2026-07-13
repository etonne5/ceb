<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriptionEvenement extends Model
{
    use HasFactory;

    protected $table = 'inscriptions_evenements';

    protected $fillable = [
        'evenement_id',
        'membre_id',
        'email',
        'nom',
        'telephone',
        'nombre_invites',
        'statut',
    ];

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }

    public function membre()
    {
        return $this->belongsTo(Membre::class, 'membre_id');
    }
}