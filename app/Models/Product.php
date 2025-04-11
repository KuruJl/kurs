<?php

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'in_stock'
    ];

    // Связь с корзиной (один товар может быть в многих корзинах)
    public function cartItems(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    // Связь с заказами через промежуточную таблицу
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items')
                   ->withPivot('quantity', 'price')
                   ->withTimestamps();
    }
}