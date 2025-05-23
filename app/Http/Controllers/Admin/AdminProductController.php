<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Category; // Добавьте этот use statement вверху файла

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
{
    $categories = \App\Models\Category::all(); // Убедитесь, что используется правильная модель Category
    return view('admin.products.create', compact('categories'));
}
    /**
     * Store a newly created resource in storage.
     */
    protected function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }
        return $slug;
    }

     public function store(Request $request): RedirectResponse
     {
         $request->validate([
             'category_id' => 'required|exists:categories,id',
             'name' => 'required|string|max:255',
             'description' => 'nullable|string',
             'price' => 'required|numeric|min:0',
             'quantity' => 'required|integer|min:0',
             'image' => 'nullable|url|max:2048', // Валидация для URL
             'in_stock' => 'nullable|boolean',
         ]);
     
         $product = new Product();
         $product->category_id = $request->input('category_id');
         $product->name = $request->input('name');
         $product->slug = Str::slug($request->input('name'));
         $product->description = $request->input('description');
         $product->price = $request->input('price');
         $product->quantity = $request->input('quantity');
         $product->in_stock = $request->has('in_stock') ? 1 : 0;
         $product->image = $request->input('image'); // Сохраняем URL
     
         $product->save();
     
         return redirect()->route('admin.products.index')->with('success', 'Товар успешно добавлен!');
     }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $product = Product::findOrFail($id);
    $categories = Category::all(); // Получаем все категории
    return view('admin.products.edit', compact('product', 'categories')); // Передаем $categories в представление
}

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
         $product = Product::findOrFail($id);
     
         $request->validate([
             'category_id' => 'required|exists:categories,id',
             'name' => 'required|string|max:255',
             'description' => 'nullable|string',
             'price' => 'required|numeric|min:0',
             'quantity' => 'required|integer|min:0',
             'image_url' => 'nullable|url|max:2048', // Валидация для URL
             'in_stock' => 'nullable',
         ]);

         $product->category_id = $request->input('category_id');
         $product->name = $request->input('name');
         $product->slug = Str::slug($request->input('name'));
         $product->description = $request->input('description');
         $product->price = $request->input('price');
         $product->quantity = $request->input('quantity');
         $product->in_stock = $request->has('in_stock') ? 1 : 0;
     
         // Обработка URL изображения
         if ($request->filled('image_url')) {
             $product->image = $request->input('image_url');
         }
     
         $product->save();
         
        return redirect()->route('admin.products.index')->with('success', 'Товар успешно обновлен!');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        // Выполняем удаление товара
        $product->delete();

        // Перенаправляем обратно на страницу списка товаров с сообщением об успехе
        return redirect()->route('admin.products.index')->with('success', 'Товар успешно удален!');
    }

}