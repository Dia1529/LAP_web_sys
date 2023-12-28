<?php

use App\Http\Controllers\BobaController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where yosu can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


//Route::get('/boba', [BobaController::class,'index']);
Route::get('/boba', [BobaController::class, 'index']);
Route::get('/about', [BobaController::class, 'about']);
Route::get('/welcome', [BobaController::class, 'welcome']);
Route::get('/list', [BobaController::class, 'list']);

////////////////////////////////////////////////////////////////
Route::get('/boba', [BobaController::class, 'index'])->name('boba.index');
Route::get('/boba/create', [BobaController::class, 'create'])->name('boba.create');
Route::post('/boba', [BobaController::class, 'store'])->name('boba.store');
Route::get('/boba/{boba}', [BobaController::class, 'show'])->name('boba.show');
Route::get('/boba/{boba}/edit', [BobaController::class, 'edit'])->name('boba.edit');

Route::put('/boba/{boba}', [BobaController::class, 'update'])->name('boba.update');
Route::delete('/boba/{boba}', [BobaController::class, 'destroy'])->name('boba.destroy');





