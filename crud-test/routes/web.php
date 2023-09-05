<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('index', [CategoryController::class, 'index'])->name('index-category');
Route::get('create', [CategoryController::class, 'create'])->name('create-category');
Route::post('store', [CategoryController::class, 'store'])->name('store-category');
Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit-category');
Route::post('update/{id}', [CategoryController::class, 'update'])->name('update-category');
Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name('delete-category');
