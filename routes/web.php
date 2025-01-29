<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PerfumeController as AdminPerfumeController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/api/perfumes', [PerfumeController::class, 'index']);

Route::middleware('auth')
->prefix('admin') // Prefisso nell'url delle rotte di questo gruppo
->name('admin.') // inizio di ogni nome delle rotte del gruppo
->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/perfumes', AdminPerfumeController::class);
    });

require __DIR__ . '/auth.php';
