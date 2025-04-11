<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Добавляет товар в корзину.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Product $product)
    {
        $cart = Session::get('cart', []);
        $quantity = $request->input('quantity', 1); // Получаем количество из запроса, по умолчанию 1

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'image' => $product->image,
            ];
        }

        Session::put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Товар добавлен в корзину!');
    }

    // ... другие методы CartController
}