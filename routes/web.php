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
Route::GET('/register', [App\Http\Controllers\Auth\RegisterController ::class, 'showRegistrationForm '])->middleware('restrictothers');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController ::class, 'register'])->middleware('restrictothers');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('profiles', App\Http\Controllers\ProfileController::class);


Route::resource('competances', App\Http\Controllers\CompetanceController::class);


Route::resource('projects', App\Http\Controllers\ProjectController::class);
Route::get('/project/{name}', [App\Http\Controllers\ProjectController::class, 'projectpage'])->name('projectpage');



Route::resource('categories', App\Http\Controllers\CategoryController::class);




Route::resource('universities', App\Http\Controllers\UniversityController::class);


Route::get('/aboutme', [App\Http\Controllers\AboutMeController::class, 'index'])->name('aboutme');
Route::post('/contactPost', [App\Http\Controllers\ContactController::class, 'contactPost'])->name('contactPost');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/{name}', [App\Http\Controllers\CategoryController::class, 'categorypage'])->name('categorypage');
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', 'AdminController@index');
    // other routes ...
});