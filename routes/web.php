<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionController;

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


Auth::routes();

// R del CRUD
Route::get('/',[AdoptionController::class, 'index'])->name('home');
Route::get('/home',[AdoptionController::class, 'index']);

// D del CRUD
Route::delete('/delete/{id}', [AdoptionController::class, 'destroy'])->name('deleteAdoption')->middleware('isadmin', 'auth');

// C del CRUD
Route::get('/create', [AdoptionController::class, 'create'])->name('createAdoption')->middleware('isadmin', 'auth');
Route::post('/', [AdoptionController::class, 'store'])->name('storeAdoption')->middleware('isadmin', 'auth');

// U del CRUD
Route::get('/edit/{id}', [AdoptionController::class, 'edit'])->name('editAdoption')->middleware('isadmin', 'auth');
Route::patch('/adoption/{id}', [AdoptionController::class, 'update'])->name('updateAdoption')->middleware('isadmin', 'auth');

//Show
Route::get('/show/{id}', [AdoptionController::class, 'show'])->name('showAdoption');

//Inscribirse/desinscribirse
Route::get('/inscribe/{id}', [AdoptionController::class, 'inscribe'])->name('inscribe')->middleware('auth');
Route::get('/unscribe/{id}', [AdoptionController::class, 'unscribe'])->name('unscribe')->middleware('auth');

