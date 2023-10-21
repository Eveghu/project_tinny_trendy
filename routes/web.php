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


Route::get('/blouses/{id}/editblouse', [BlousesController::class, 'edit'])->name('blouses.edit');
Route::get('/pants/{id}/editpant', [PantsController::class, 'edit'])->name('pants.edit');
Route::get('/sets/{id}/editset', [SetsController::class, 'edit'])->name('sets.edit');
Route::get('/dresses/{id}/editdress', [DressesController::class, 'edit'])->name('dresses.edit');





Route::get('/blouses', [BlousesController::class, 'index'])->name('blouses.index');
Route::get('/pants', [PantsController::class, 'index'])->name('pants.index');
Route::get('/sets', [SetsController::class, 'index'])->name('sets.index');
Route::get('/dresses', [DressesController::class, 'index'])->name('dresses.index');



Route::get('delete/{id}',[BlousesController::class, 'destroy']);
Route::get('delete/{id}',[PantsController::class, 'destroy']);
Route::get('delete/{id}',[SetsController::class, 'destroy']);
Route::get('delete/{id}',[DressesController::class, 'destroy']);




Auth::routes();

