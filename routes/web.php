<?php

use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/katalog', [ProductController::class, 'index']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/profile', [AdminController::class, 'profile']);
    Route::post('/admin/profile', [AdminController::class, 'update']);
    Route::post('/admin/password', [AdminController::class, 'updatePassword']);
    Route::get('/admin/product', [AdminProductController::class, 'index']);
    Route::get('/admin/product/{id}/edit', [AdminProductController::class, 'edit']);
    Route::post('/admin/product/{id}/edit', [AdminProductController::class, 'update']);
    Route::get('/admin/product/create', [AdminProductController::class, 'create']);
    Route::post('/admin/product/create', [AdminProductController::class, 'store']);
    Route::get('/admin/berita', [AdminBeritaController::class, 'index']);
    Route::get('/admin/berita/create', [AdminBeritaController::class, 'create']);
    Route::post('/admin/berita/create', [AdminBeritaController::class, 'store']);
    Route::get('/admin/berita/{id}/edit', [AdminBeritaController::class, 'edit']);
    Route::post('/admin/berita/{id}/edit', [AdminBeritaController::class, 'update']);

    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/berita/{id}', [BeritaController::class, 'detail']);

    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authLogin']);
});
