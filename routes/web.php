<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

use Illuminate\Support\Facades\Route;

Route::get('/   ', function () {
    return view('index');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/support', function () {
    return view('support');
});

Route::get('/moonlight', function () {
    // Здесь вам нужно каким-то образом получить данные о товаре "moonlight"
    // из вашей базы данных. Предположим, что ID товара "moonlight" равен 1.
    $productId = 4; // Замените на фактический ID товара "moonlight" в вашей БД
    $product = \App\Models\Product::find($productId);

    // Теперь мы передаем объект $product в представление
    return view('moonlight', ['product' => $product]);
});

Route::get('/space', function () {
    return view('space');
});
Route::get('/one', function () {
    return view('one');
});
Route::get('/superone', function () {
    return view('superone');
});
Route::get('/mousepad-blue', function () {
    return view('mousepad-blue');
});
Route::get('/mousepad-red', function () {
    return view('mousepad-red');
});
Route::get('/night', function () {
    return view('night');
});
Route::get('/loud', function () {
    return view('loud');
});

// Маршруты корзины
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\Auth\LogoutController;
Route::post('/logout', LogoutController::class)->name('logout');