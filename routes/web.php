<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Vanya Esvanolla',
        'kelas' => 'TSM-03',
        'nim' => '707082400084',
    ]);
});

Route::view('/contact', 'pages.contact');

Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];

    return view('pages.latihan', [
        'matakuliah' => $matakuliah
    ]);
});

Route::get('/sapa', [SapaController::class, 'index']);

// Routing Product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// Routing Category
Route::resource('/category', CategoryController::class);