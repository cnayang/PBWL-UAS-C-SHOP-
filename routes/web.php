<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::patch('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);

Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\ProdukController::class, 'create']);
Route::post('/produk', [App\Http\Controllers\ProdukController::class, 'store']);
Route::get('/produk/edit/{id}', [App\Http\Controllers\ProdukController::class, 'edit']);
Route::patch('/produk/{id}', [App\Http\Controllers\ProdukController::class, 'update']);
Route::delete('/produk/{id}', [App\Http\Controllers\ProdukController::class, 'destroy']);
Route::resource('produk', App\Http\Controllers\ProdukController::class);

Route::get('/inventaris', [App\Http\Controllers\InventarisController::class, 'index']);
Route::get('/inventaris/create', [App\Http\Controllers\InventarisController::class, 'create']);
Route::post('/inventaris', [App\Http\Controllers\InventarisController::class, 'store']);
Route::get('/inventaris/edit/{id}', [App\Http\Controllers\InventarisController::class, 'edit']);
Route::patch('/inventaris/{id}', [App\Http\Controllers\InventarisController::class, 'update']);
Route::delete('/inventaris/{id}', [App\Http\Controllers\InventarisController::class, 'destroy']);
Route::resource('inventaris', App\Http\Controllers\InventarisController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');