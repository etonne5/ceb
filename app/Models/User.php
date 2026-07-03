<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relation vers le profil membre (si créé)
    public function membre()
    {
        return $this->hasOne(Membre::class, 'user_id');
    }

    // Dons via le membre (hasManyThrough)
    public function dons()
    {
        return $this->hasManyThrough(Don::class, Membre::class, 'user_id', 'membre_id', 'id', 'id');
    }

    // Helpers rôle
    public function estAdministrateur(): bool
    {
        return $this->role === 'administrateur';
    }

    public function estPasteur(): bool
    {
        return $this->role === 'pasteur';
    }
}