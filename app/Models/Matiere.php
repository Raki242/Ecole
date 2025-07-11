<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'coefficient',];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function formateurs()
    {
        return $this->belongsToMany(Formateur::class);
    }
}
