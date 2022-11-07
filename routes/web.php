<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\ActeursController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//bindingresolution


Route::get('films', 
[FilmsController::class, 'index'])->name('films.index');

Route::get('films/zoom', 
    [FilmsController::class, 'zoom'])->name('films.zoom');

/*AFFICHER LE FORMULAIRE D'AJOUT D'UN ACTEUR*/
Route::get('acteurs/create', 
[ActeursController::class, 'create'])->name('acteurs.create');

/*Affiche le form pour ajout de film*/
Route::get('films/create', 
[FilmsController::class, 'create'])->name('films.create');



/*Traiter les champs du form*/
Route::post('acteurs', 
[ActeursController::class, 'store'])->name('acteurs.store');

/*Traite les champ de film*/ 
Route::post('films', 
[FilmsController::class, 'store'])->name('films.store');


/*Afficher le form de creation de Acteur_film*/
Route::get('acteurs/createActeurFilm', 
[ActeursController::class, 'createActeurFilm'])->name('acteurs.createActeurFilm');

Route::post('acteurs/createActeurFilm', 
[ActeursController::class, 'storeActeurFilm'])->name('acteursFilms.store');


