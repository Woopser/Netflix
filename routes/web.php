<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;

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

Route::get('zoom', function () {
    return view('zoom');
});
