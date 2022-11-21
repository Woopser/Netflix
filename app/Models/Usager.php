<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Usager extends Authenticable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'email',
        'password',
        'identification',
    ];

    protected $hidden = [
        'passsword',
        'remember_token',
    ];
}
