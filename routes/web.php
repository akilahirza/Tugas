<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/detail', [DetailController::class, 'index'])->middleware(['auth', 'verified'])->name('detail');

Route::get('/form/{id?}', [FormController::class, 'index'])->middleware(['auth', 'verified'])->name('form');
Route::post('/form/tambah', [FormController::class, 'tambah'])->middleware(['auth', 'verified'])->name('tambahSupplier');
Route::put('/form/update/{id?}', [FormController::class, 'update'])->middleware(['auth', 'verified'])->name('updateSupplier');
Route::delete('/form/delete/{id?}', [FormController::class, 'hapus'])->middleware(['auth', 'verified'])->name('hapusSupplier');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
