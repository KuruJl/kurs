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
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
