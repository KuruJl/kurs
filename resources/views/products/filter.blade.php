<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('resources/css/fonts.css') }}" rel="stylesheet">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/norwester" rel="stylesheet">
  <style>
        .font-norwester { font-family: 'Norwester', sans-serif; }
        .font-rubik-light { font-family: 'Rubik', sans-serif; font-weight: 300; }
        .font-rubik-regular { font-family: 'Rubik', sans-serif; font-weight: 400; }
        .font-rubik-medium { font-family: 'Rubik', sans-serif; font-weight: 500; }
        .font-rubik-semibold { font-family: 'Rubik', sans-serif; font-weight: 600; }
    </style>
</head>
<body class="font-sans antialiased ">
    <div class="min-h-screen bg-gray-100">

        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main>
            {{-- Здесь будет ваш контент страницы фильтров --}}
            <div class="container mx-auto py-8 sm:py-14">
                <h1 class="font-norwester text-2xl sm:text-4xl md:text-5xl text-pink-200 mb-6">Фильтр товаров</h1>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <aside class="bg-Wblue rounded-xl border-2 border-white/50 p-6 sm:p-8">
                        <h2 class="font-rubik-semibold text-xl sm:text-2xl text-white mb-4">Фильтры</h2>

                        <div class="mb-6">
                            <h3 class="font-rubik-medium text-lg text-white/90 mb-2">Категории</h3>
                            <form action="{{ route('products.filter') }}" method="GET" class="space-y-2 sm:space-y-3">
                                @foreach ($categories as $category)
                                    <div class="flex items-center">
                                        <input type="checkbox" name="category[]" value="{{ $category->id }}" class="form-checkbox h-5 w-5 text-pink-200 focus:ring-pink-500 border-white/70 rounded"
                                               @if(request()->has('category') && in_array($category->id, request()->get('category'))) checked @endif>
                                        <label for="category_{{ $category->id }}" class="ml-2 font-rubik-light text-lg text-white/80">{{ $category->name }}</label>
                                    </div>
                                @endforeach

                                <div class="mt-4 sm:mt-6">
                                    <h3 class="font-rubik-medium text-lg text-white/90 mb-2">Цена</h3>
                                    <div class="flex items-center gap-2 mb-1">
                                        <label for="min_price" class="font-rubik-light text-lg text-white/80">От:</label>
                                        <input type="number" name="min_price" id="min_price" class="bg-darkBlue text-white border border-white/30 rounded py-2 px-3 w-full focus:outline-none focus:ring-pink-500 focus:border-pink-500 text-sm" value="{{ request('min_price') }}">
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <label for="max_price" class="font-rubik-light text-lg text-white/80">До:</label>
                                        <input type="number" name="max_price" id="max_price" class="bg-darkBlue text-white border border-white/30 rounded py-2 px-3 w-full focus:outline-none focus:ring-pink-500 focus:border-pink-500 text-sm" value="{{ request('max_price') }}">
                                    </div>
                                </div>

                                <button type="submit" class="bg-blue-600/20 text-white border-2 border-white rounded-md py-3 px-6 font-rubik-semibold text-lg hover:bg-blue-600/30 transition mt-4">Применить</button>
                                <a href="{{ route('products.filter') }}" class="inline-block font-rubik-light text-lg text-pink-200 hover:opacity-80 transition ml-2 mt-2">Сбросить</a>
                            </form>
                        </div>

                    </aside>

                    <section class="md:col-span-3">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                            @forelse ($filteredProducts as $product)
                                <div class="bg-Wblue rounded-xl border-2 border-white/50 overflow-hidden">
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                                    <div class="p-4 sm:p-6">
                                        <h3 class="font-rubik-semibold text-xl text-white mb-2">{{ $product->name }}</h3>
                                        <p class="font-rubik-light text-lg text-white/80 mb-2">{{ Str::limit($product->description, 50) }}</p>
                                        <p class="font-rubik-semibold text-xl text-pink-200">{{ number_format($product->price, 2) }} ₽</p>
                                        <a href="#" class="inline-block bg-blue-600/20 text-white border-2 border-white rounded-md py-2 px-4 font-rubik-light text-lg hover:bg-blue-600/30 transition mt-2">Подробнее</a>
                                    </div>
                                </div>
                            @empty
                                <p class="font-rubik-light text-lg text-white/80">Нет товаров, соответствующих выбранным фильтрам.</p>
                            @endforelse
                        </div>

                        <div class="mt-8">
                            {{-- Пагинация (убедитесь, что стили подключены, если вы не используете макет) --}}
                            @if(isset($filteredProducts) && method_exists($filteredProducts, 'links'))
                                {{ $filteredProducts->links('vendor.pagination.tailwind') }}
                            @endif
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</body>
</html>