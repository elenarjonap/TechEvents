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

Route::get('/',[AdoptionController::class, 'index'])->name('home');
Route::get('/home',[AdoptionController::class, 'index']);
Route::delete('/delete{id}', [AdoptionController::class, 'destroy'])->name('deleteAdoption');