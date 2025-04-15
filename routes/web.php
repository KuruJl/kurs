<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

use App\Models\Product; // Убедитесь, что модель Product импортирована



Route::get('/index', function () {
    return view('index');
});
Route::get('/2index', function () {
    return view('2index');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/cart', function () {
    return view('cart');
});Route::get('/profile', function () {
    return view('profile');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/qweqwe', function () {
    return view('qweqwe');
});
Route::get('/moonlight', function () {
    return view('moonlight');
});
Route::get('/space', function () {
    return view('space');
});
Route::get('/superone', function () {
    return view('superone');
});
Route::get('/one', function () {
    return view('one');
});
Route::get('/mousepad-blue', function () {
    return view('mousepad-blue');
});
Route::get('/myindex', function () {
    return view('myindex');
});
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
