<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Checklogin;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['checklogin'])->group(function () {
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
