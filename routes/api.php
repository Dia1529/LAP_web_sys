
<?php
use App\Http\Controllers\BobaController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// API Routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
//Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Boba Routes
Route::group(['middleware' => 'jwt', 'prefix' => 'boba'], function () {
    Route::get('/', [BobaController::class, 'get_boba']);
    Route::post('/', [BobaController::class, 'createBobaApi']);
});

// Auth Routes
Route::group(['middleware' => 'jwt'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
   //Route::get('/', [BobaController::class, 'get_boba']);
    //Route::post('/', [BobaController::class, 'createBobaApi']);
    //Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
