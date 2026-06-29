<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priere extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'prieres';

    protected $fillable = [
        'membre_id',
        'titre',
        'description',
        'type',
        'statut',
        'est_public',
        'nombre_prieres',
    ];

    protected $casts = [
        'est_public' => 'boolean',
    ];

    public function membre()
    {
        return $this->belongsTo(Membre::class, 'membre_id');
    }

    public function incrementerCompteur()
    {
        $this->increment('nombre_prieres');
    }
}