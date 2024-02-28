<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'email',
        'photo',
        'video',
        'options',
        'filiere',
        'categorie',
        'facebook',
        'numero',
        'numero_candidat',
        'description_de_personnalite',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function votes() {
        return $this->hasMany(Vote::class);
    }
}
