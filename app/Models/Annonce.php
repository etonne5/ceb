<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'annonces';

    protected $fillable = [
        'user_id',
        'titre',
        'contenu',
        'image',
        'date_publication',
        'date_expiration',
        'priorite',
        'est_publiee',
    ];

    protected $casts = [
        'date_publication' => 'datetime',
        'date_expiration' => 'datetime',
        'est_publiee' => 'boolean',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePubliees($query)
    {
        return $query->where('est_publiee', true)
            ->whereNotNull('date_publication')
            ->where('date_publication', '<=', now())
            ->where(function ($q) {
                $q->whereNull('date_expiration')
                  ->orWhere('date_expiration', '>', now());
            });
    }
}
