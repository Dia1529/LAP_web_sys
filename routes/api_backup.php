<?php

use App\Http\Controllers\BobaController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get("/boba",[BobaController:: class,'get_boba']);
//Route::post("/boba",[BobaController:: class,'create_boba']);


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register'); 
Route::post("/boba",[BobaController:: class,'createBobaApi']);
Route::get("/boba",[BobaController:: class,'get_boba']);

Route::group(['middleware' => 'api','prefix'=>  'auth'], function ($router) {
    //Route::get('/cookies/{id}', [BobaController::class, 'show'])->name('boba.show');
    Route::get("/boba",[BobaController:: class,'get_boba']);
    //Route::post("/boba",[BobaController:: class,'createBobaApi']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    //Route::post('/register', [AuthController::class, 'register'])->name('register'); 
});