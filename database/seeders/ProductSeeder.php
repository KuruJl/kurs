<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $mouseCategory = Category::where('slug', 'mice')->first();

        if ($mouseCategory) {
            Product::create([
                'category_id' => $mouseCategory->id,
                'name' => 'Hachiroku one',
                'slug' => 'hachiroku-one', // Сделайте slug уникальным для продукта
                'description' => 'Топовая игровая мышь, которая адаптируется под тебя. поддерживает hot-swap и позволяет с легкостью менять микро-переключатели, подбирая самый комфортной клик. Больше не нужно идти на компромиссы.',
                'price' => 6990,
                'image' => 'images/hachiroku-space.jpg', // Обновите путь к изображению
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Product::create([
                'category_id' => $mouseCategory->id,
                'name' => 'Hachiroku superone',
                'slug' => 'hachiroku-superone', // Сделайте slug уникальным для продукта
                'description' => 'Время работы от одного заряда - 130 часов (объём аккумулятора 500 mAh). Чип Nordic 52840 с поддержкой частоты опроса до 4000 Гц (требует специального ресивера, который можно приобрести отдельно)',
                'price' => 7499,
                'image' => 'images/hachiroku-space.jpg', // Обновите путь к изображению
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $this->command->warn('Категория "mice" не найдена. Убедитесь, что CategorySeeder запущен.');
        }       
         
        // Получаем категорию "Клавиатуры" по slug
        $keyboardCategory = Category::where('slug', 'keyboards')->first();

        if ($keyboardCategory) {
            Product::create([
                'category_id' => $keyboardCategory->id,
                'name' => 'Hachiroku Space',
                'slug' => 'hachiroku-space', // Сделайте slug уникальным для продукта
                'description' => 'Флагманская клавиатура премиального уровня, в которой продумана каждая мелкая деталь, чтобы игровые сессии даже самых требовательных пользователей проходили с максимальным комфортом',
                'price' => 8999,
                'image' => 'images/hachiroku-space.jpg', // Обновите путь к изображению
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Product::create([
                'category_id' => $keyboardCategory->id,
                'name' => 'Hachiroku moonlight',
                'slug' => 'hachiroku-moonlight', // Сделайте slug уникальным для продукта
                'description' => 'Проводное подключение и уравновешенный комплект поставки позволили добиться комфортной цены на девайс, сохранив все важнейшие преимущества премиального устройства - невероятно приятный тайпинг, исключительную функциональность и абсолютную надежность.',
                'price' => 9999,
                'image' => 'images/hachiroku-space.jpg', // Обновите путь к изображению
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $this->command->warn('Категория "keyboards" не найдена. Убедитесь, что CategorySeeder запущен.');
        }       
     
    }
        
}
