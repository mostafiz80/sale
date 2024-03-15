<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'admin')->group(function(){
    Route::get('/sales', [SaleController::class, 'index'])->name('admin.index');
    Route::get('/sales/create', [SaleController::class, 'create'])->name('admin.create');
    Route::get('/sales/store', [SaleController::class, 'store'])->name('admin.store');
    Route::get('/sales/read', [SaleController::class, 'read'])->name('admin.read');
    Route::get('/sales/edit/{id}', [SaleController::class, 'edit'])->name('admin.edit');
    Route::post('/sales/update/{id}', [SaleController::class, 'update'])->name('admin.update');
    Route::get('/sales', [SaleController::class, 'index'])->name('admin.index');
});

require __DIR__.'/auth.php';
