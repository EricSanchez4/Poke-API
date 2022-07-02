<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController; 
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

Route::get('/', function () {
    return view('form');
})->name('form');

// Mes routes
Route::get('/search', [PokemonController::class, 'search']); 
// Route::get('/newpoke', [PokemonControllers::class, 'newpoke']); 


