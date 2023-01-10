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
Route::delete('/delete/{id}', [AdoptionController::class, 'destroy'])->name('deleteAdoption');

// C del CRUD
Route::get('/create', [AdoptionController::class, 'create'])->name('createAdoption');
Route::post('/', [AdoptionController::class, 'store'])->name('storeAdoption');

// U del CRUD
Route::get('/edit/{id}', [AdoptionController::class, 'edit'])->name('editAdoption');
Route::patch('/adoption/{id}', [AdoptionController::class, 'update'])->name('updateAdoption');

//Show
Route::get('/show/{id}', [AdoptionController::class. 'show'])->name('showAdoption');