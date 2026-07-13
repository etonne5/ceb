<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sermon extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sermons';

    protected $fillable = [
        'titre',
        'description',
        'orateur',
        'date_sermon',
        'youtube_id',
        'thumbnail',
        'duree',
        'categorie',
        'references_bibliques',
        'nombre_vues',
        'est_publie',
    ];

    protected $casts = [
        'date_sermon' => 'datetime',
        'est_publie' => 'boolean',
    ];

    public function getYoutubeUrlAttribute()
    {
        return $this->youtube_id ? "https://www.youtube.com/embed/{$this->youtube_id}" : null;
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->youtube_id ? "https://img.youtube.com/vi/{$this->youtube_id}/maxresdefault.jpg" : $this->thumbnail;
    }

    public function scopePublies($query)
    {
        return $query->where('est_publie', true);
    }

    public function scopeByCategorie($query, $categorie)
    {
        return $query->where('categorie', $categorie);
    }
}