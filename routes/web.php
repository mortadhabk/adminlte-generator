<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profiles/{id}', [App\Http\Controllers\ProjectController::class, 'indexhome'])->name('indexhome');


Route::resource('profiles', App\Http\Controllers\ProfileController::class);


Route::resource('competances', App\Http\Controllers\CompetanceController::class);


Route::resource('projects', App\Http\Controllers\ProjectController::class);
