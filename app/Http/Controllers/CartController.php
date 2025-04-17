<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, Product $product)
    {
       // dd($request->all(), $product);
        $quantity = $request->input('quantity', 1); // Получаем количество из запроса, по умолчанию 1
        $cart = session()->get('cart', []); // Получаем корзину из сессии или создаем новую

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image_url, // Используем аксессор
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Товар добавлен в корзину!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function update(Request $request, $id)
    {
        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Корзина обновлена!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Товар удален из корзины!');
    }
}