<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/**
 * ALL USER PROTECTED ROUTES
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/home', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/create_product', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::get('/update_product', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/home', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
});

