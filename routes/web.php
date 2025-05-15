<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourRequestController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

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

Route::get('/', [TourController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/requests', [TourRequestController::class, 'index'])->name('tour.request');

    Route::get('/tour/{tour}', [TourRequestController::class, 'show'])->name('request.create');
    Route::post('/tour/store', [TourRequestController::class, 'store'])->name('request.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/exit', [ProfileController::class, 'exit'])->name('profile.exit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(Admin::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

require __DIR__ . '/auth.php';
