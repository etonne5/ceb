<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'departements';

    protected $fillable = [
        'nom',
        'description',
        'responsable',
        'email_responsable',
        'telephone_responsable',
        'image',
        'missions',
        'type',
        'icone',
        'couleur_icone',
        'nombre_membres',
        'est_actif',
    ];

    protected $casts = [
        'est_actif' => 'boolean',
    ];

    public function scopeActifs($query)
    {
        return $query->where('est_actif', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}