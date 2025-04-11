<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Связь с корзиной пользователя
    public function cartItems(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    // Связь с заказами пользователя
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}