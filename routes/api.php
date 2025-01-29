<?php

use App\Http\Controllers\Admin\PerfumeController as AdminPerfumeController;
use App\Http\Controllers\PerfumeController;
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

// Route::get('/api/perfumes', [PerfumeController::class, 'index']);

// Route::resource('/admin/perfumes', [AdminPerfumeController::class]);

// Route::get('/api/perfumes', [AdminPerfumeController::class, 'index']);
// Route::get('/perfumes/{id}', [AdminPerfumeController::class, 'show']);
