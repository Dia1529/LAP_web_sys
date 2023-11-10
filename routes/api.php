<?php

use App\Http\Controllers\BobaController;
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
Route::get("/boba",[BobaController:: class,'get_boba']);
Route::post("/boba",[BobaController:: class,'create_boba']);
Route::get("/boba " , function(){
    return response()-> json([
        'message'=> 'Boba List API'
    ]);
});

