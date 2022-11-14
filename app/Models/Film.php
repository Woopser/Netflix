<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;

class Film extends Model
{

    protected $fillable = ['nom','duree', 'cote', 'realisateur','genre','image','preview'];

    use HasFactory;
    public function acteurs(){
        return $this->belongsToMany('App\Models\Acteur');
    }
}
