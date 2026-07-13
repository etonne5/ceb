<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eglise extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'eglises';

    protected $fillable = [
        'nom',
        'description',
        'adresse',
        'ville',
        'code_postal',
        'telephone',
        'email',
        'image',
        'pays',
        'latitude',
        'longitude',
        'pasteur',
        'capacite',
        'horaires_culte',
        'est_active',
    ];

    protected $casts = [
        'est_active' => 'boolean',
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    public function getAdresseCompleteAttribute()
    {
        return trim("{$this->adresse}, {$this->code_postal} {$this->ville}, {$this->pays}");
    }

    public function scopeActives($query)
    {
        return $query->where('est_active', true);
    }

    public function scopeByPays($query, $pays)
    {
        return $query->where('pays', $pays);
    }
}