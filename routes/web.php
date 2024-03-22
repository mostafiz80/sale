<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
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
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.viewuser');
    Route::get('/admin/sales', [SaleController::class, 'viewsale'])->name('admin.viewsale');
    Route::get('/admin/sales/create', [SaleController::class, 'create'])->name('admin.create');
    Route::post('/admin/sales/store', [SaleController::class, 'store'])->name('admin.store');
    Route::get('/admin/sales/read', [SaleController::class, 'read'])->name('admin.read');
    Route::get('/admin/sales/edit/{id}', [SaleController::class, 'editsale'])->name('admin.edit');
    Route::post('/admin/sales/update/{id}', [SaleController::class, 'update'])->name('admin.update');
    Route::get('/admin/sales/home', [SaleController::class, 'index'])->name('admin.index');



    Route::get('/admin/expenses/home', [ExpenseController::class, 'viewexpenses'])->name('admin.view.expenses');
    Route::get('/admin/expenses/create', [ExpenseController::class, 'create'])->name('admin.expenses.create');
    Route::post('/admin/expenses/store', [ExpenseController::class, 'store'])->name('admin.expense.store');


    // Generate files
    Route::get('/admin/sales/result', [SaleController::class, 'generateview'])->name('admin.sale.result');    
    
});

require __DIR__.'/auth.php';
