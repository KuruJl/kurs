<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Исправлено на /profile
Route::get('/support', function () {
    return view('support');
});
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/moonlight', function () {
    $productId = 4; // Замените на фактический ID товара "moonlight" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('moonlight', ['product' => $product]);
});

Route::get('/space', function () {
    $productId = 3; // Замените на фактический ID товара "space" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('space', ['product' => $product]);
});
Route::get('/one', function () {
    $productId = 2; // Замените на фактический ID товара "one" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('one', ['product' => $product]);
});
Route::get('/superone', function () {
    $productId = 1; // Замените на фактический ID товара "superone" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('superone', ['product' => $product]);
});
Route::get('/mousepad-blue', function () {
    $productId = 8; // Замените на фактический ID товара "mousepad-blue" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('mousepad-blue', ['product' => $product]);
});
Route::get('/mousepad-red', function () {
    $productId = 7; // Замените на фактический ID товара "mousepad-red" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('mousepad-red', ['product' => $product]);
});
Route::get('/night', function () {
    $productId = 5; // Замените на фактический ID товара "night" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('night', ['product' => $product]);
});
Route::get('/loud', function () {
    $productId = 6; // Замените на фактический ID товара "loud" в вашей БД
    $product = \App\Models\Product::find($productId);
    return view('loud', ['product' => $product]);
});

// Маршруты корзины
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['is_admin'])->group(function () {
    Route::get('/index', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::get('/edit/{product}', [AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/update/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/destroy/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::post('/store', [AdminProductController::class, 'store'])->name('admin.products.store');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\Auth\LogoutController;
Route::post('/logout', LogoutController::class)->name('logout');