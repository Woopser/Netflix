<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{

    protected $fillable = ['nom', 'prenom', 'age', 'taille', 'image'];

    use HasFactory;
    public function films(){
        return $this->belongsToMany('App\Models\Film');
    }
}
