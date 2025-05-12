<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function filter(Request $request): View
    {
        $categories = Category::all();
        $products = Product::query();

        // Фильтрация по категории
        if ($request->has('category') && is_array($request->get('category'))) {
            $products->whereIn('category_id', $request->get('category'));
        }

        // Фильтрация по цене (пример: min_price и max_price в запросе)
        if ($request->has('min_price') && is_numeric($request->get('min_price'))) {
            $products->where('price', '>=', $request->get('min_price'));
        }
        if ($request->has('max_price') && is_numeric($request->get('max_price'))) {
            $products->where('price', '<=', $request->get('max_price'));
        }

        // Добавьте здесь другие фильтры (например, по производителю, характеристикам и т.д.)

        $filteredProducts = $products->paginate(12); // Пагинация для большого количества товаров

        return view('products.filter', compact('categories', 'filteredProducts', 'request'));
    }
}