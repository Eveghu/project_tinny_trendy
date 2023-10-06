<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlousesController;
use App\Http\Controllers\PantsController;
use App\Http\Controllers\SetsController;
use App\Http\Controllers\DressesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('blouses/create', [App\Http\Controllers\BlousesController::class, 'create']);
Route::resource('blouses', BlousesController::class);

Route::post('pants/create', [App\Http\Controllers\PantsController::class, 'create']);
Route::resource('pants', PantsController::class);

Route::post('sets/create', [App\Http\Controllers\SetsController::class, 'create']);
Route::resource('sets', SetsController::class);

Route::post('dresses/create', [App\Http\Controllers\DressesController::class, 'create']);
Route::resource('dresses', DressesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
