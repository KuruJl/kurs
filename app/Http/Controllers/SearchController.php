<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Product;
use App\Models\Category; // Добавим модель Category

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Фильтрация по категории
        $categorySlug = $request->input('category');
        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->firstOrFail();
            $query->where('category_id', $category->id);
        }

        // Поиск по имени товара
        $searchTerm = $request->input('q'); // 'q' - стандартное имя для поискового запроса
        if ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }

        $searchResults = $query->paginate(12)->appends(request()->except('page')); // Добавим withQueryString() для сохранения параметров в пагинации

        // Получаем все категории для отображения фильтров слева
        $categories = Category::all();

        return view('search.index', compact('searchResults', 'categories', 'searchTerm', 'categorySlug'));
    }
}
