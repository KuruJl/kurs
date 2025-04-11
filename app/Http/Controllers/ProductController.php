<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show($id): View
    {
        $product = Product::findOrFail($id); // Получаем модель товара по ID или выбрасываем исключение 404, если не найден

        return view('product.show', ['product' => $product]); // Передаем переменную $product в view 'product.show'
    }
}