<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\ActeursController;
use App\Http\Controllers\UsagersController;

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

Route::get('acteurs',
[ActeursController::class, 'index'])->name('acteurs.index');

Route::get('films', 
[FilmsController::class, 'index'])->name('films.index');

/*Identification, <usagers></usagers>*/
Route::get('login',
[UsagersController::class, 'showLoginForm'])->name('login');

Route::post('login',
[UsagersController::class, 'login'])->name('usagers.login');

Route::post('logout',
[UsagersController::class, 'logout'])->name('logout');

/*Usager CRUD*/
Route::get('usagers',
[UsagersController::class, 'index'])->name('usagers.index');

/*AFFICHER LE FORMULAIRE D'AJOUT D'UN ACTEUR*/
Route::get('acteurs/create', 
[ActeursController::class, 'create'])->name('acteurs.create')->middleware('auth');

/*Affiche le form pour ajout de film*/
Route::get('films/create', 
[FilmsController::class, 'create'])->name('films.create')->middleware('auth');



/*Traiter les champs du form*/
Route::post('acteurs', 
[ActeursController::class, 'store'])->name('acteurs.store')->middleware('auth');

/*Traite les champ de film*/ 
Route::post('films', 
[FilmsController::class, 'store'])->name('films.store')->middleware('auth');


/*Afficher le form de creation de Acteur_film*/
Route::get('acteurs/createActeurFilm', 
[ActeursController::class, 'createActeurFilm'])->name('acteurs.createActeurFilm')->middleware('auth');

Route::post('acteurs/createActeurFilm', 
[ActeursController::class, 'storeActeurFilm'])->name('acteursFilms.store')->middleware('auth');

/*Route du modifiage de film*/
Route::get('/films/{id}/modifier/',
[FilmsController::Class, 'edit'])->name('films.edit')->middleware('auth');

/*Route edit pour acterur*/
Route::get('/acteurs/{id}/modifier/',
[ActeursController::Class, 'edit'])->name('acteurs.edit')->middleware('auth');

/*route de ajouter user*/
Route::post('usagers', 
[UsagersController::class, 'store'])->name('usagers.store')->middleware('auth');
Route::get('usagers/create', 
[UsagersController::class, 'create'])->name('usagers.create')->middleware('auth');

/*Route pour modifiage de user*/
Route::get('/usager/{id}/modifier/',
[UsagersController::Class, 'edit'])->name('usagers.edit')->middleware('auth');
Route::patch('/usagers/{id}/modifier',
[UsagersController::class, 'update'])->name('usagers.update')->middleware('auth');


/*Route pour modifiage de films 2*/
Route::patch('/films/{id}/modifier',
[FilmsController::class, 'update'])->name('films.update')->middleware('auth');

/*Route pour modifiage d'acteurs*/
Route::patch('/acteurs/{id}/modifier',
[ActeursController::class, 'update'])->name('acteurs.update')->middleware('auth');

/*Supprimer*/
Route::delete('/films/{id}',
[FilmsController::class, 'destroy'])->name('films.destroy')->middleware('auth');

Route::delete('/acteurs/{id}',
[ActeursController::class, 'destroy'])->name('acteurs.destroy')->middleware('auth');

Route::delete('/usagers/{id}',
[UsagersController::class, 'destroy'])->name('usagers.destroy')->middleware('auth');

//Route pour show film.
Route::get('films/{film}/', 
[FilmsController::class, 'show'])->name('films.show');

//Route pour acteur show
Route::get('acteurs/{acteur}/', 
[ActeursController::class, 'show'])->name('acteurs.show');



