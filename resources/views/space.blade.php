<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hachiroku - moonlight</title>
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
        .bg-darkBlue { background-color: #0f172a; }
        .text-pink-200 { color: #fbcfe8; }
        .border-white { border-color: white; }
        .bg-blue-600 { background-color: rgba(37, 99, 235, 0.2); }
    </style>
</head>
<body class="bg-darkBlue min-h-screen w-full">
    <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-14">
        <!-- Header Section -->
        <nav class="flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 sm:h-16">
        <a  href="{{ url(path: '/') }}" class="font-norwester text-4xl sm:text-5xl md:text-6xl text-pink-200">hachiroku</a>
        <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 w-full sm:w-auto">
        <ul class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 text-lg sm:text-xl md:text-2xl text-white">
                        <li><a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">каталог</a></li>
                        <li><a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">поддержка</a></li>
                        <li><a href="{{ url('/cart') }}" class="font-rubik-light hover:opacity-80 transition">корзина</a></li>

                        <li><a href="{{ url('/profile') }}" class="font-rubik-light hover:opacity-80 transition">профиль</a></li>
                        @auth
                        <li><form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="font-rubik-light hover:opacity-80 transition hover:text-red-600">Выйти</button>
                            </form>
                        </li>
                        @else
                        <li>
                        <a href="{{ route('login') }}" class="font-rubik-light hover:opacity-80 transition">Вход</a>
                        </li>
                        <li>
                        <a href="{{ route('register') }}" class="font-rubik-light hover:opacity-80 transition">Регистрация</a>

                        </li>
                        @endauth
                    </ul>
                    
                </div>
            </nav>


        <!-- Main Product Section -->
        <main class="flex gap-8 sm:gap-10 md:gap-16 mt-8 sm:mt-12 lg:flex-col">
            <section class="flex flex-col lg:flex-row gap-8 w-full">
                <!-- Product Images -->
                <section class="w-full lg:w-1/2 max-w-[500px]">
                    <div class="border-2 border-dashed border-white w-full h-[400px] flex items-center justify-center">
                        <img src="https://i.ibb.co/M5NpRjs2/image-9.png" 
                             alt="hachiroku moonlight keyboard" 
                             class="max-w-full max-h-full object-contain" />
                    </div>
                    <div class="flex gap-2 mt-3 sm:mt-6">
                        <div class="border-2 border-dashed border-white w-40 h-40 flex items-center justify-center">
                            <img src="https://i.ibb.co/QjKc7B5H/image-9.png" 
                                 alt="hachiroku moonlight thumbnail 1" 
                                 class="max-w-full max-h-full object-contain" />
                        </div>
                        <div class="border-2 border-dashed border-white w-40 h-40 flex items-center justify-center">
                            <img src="https://i.ibb.co/Z6fGSCJ9/image-10.png" 
                                 alt="hachiroku moonlight thumbnail 2" 
                                 class="max-w-full max-h-full object-contain" />
                        </div>
                        <div class="border-2 border-dashed border-white w-40 h-40 flex items-center justify-center">
                            <img src="https://i.ibb.co/MxRVN8WL/image-11.png" 
                                 alt="hachiroku moonlight thumbnail 3" 
                                 class="max-w-full max-h-full object-contain" />
                        </div>
                    </div>
                </section>

                <!-- Product Details -->
                <section class="w-full lg:w-1/2">
                    <h1 class="font-rubik-semibold text-4xl sm:text-5xl md:text-6xl text-white/80">hachiroku space</h1>
                    
                    <div class="mt-6 sm:mt-8">
                        <h2 class="font-rubik-medium text-xl sm:text-2xl text-white/80">Описание:</h2>
                        <p class="font-rubik-light text-lg sm:text-xl text-white mt-2 leading-relaxed">
                        Флагманская клавиатура премиального уровня, в которой продумана каждая мелкая деталь, чтобы игровые сессии даже самых требовательных пользователей проходили с максимальным комфортом
                        </p>
                    </div>
                    
                    <div class="mt-8 sm:mt-10">
                        <h2 class="font-rubik-medium text-xl sm:text-2xl text-white/80">Характеристики:</h2>
                        <p class="font-rubik-light text-lg sm:text-xl text-white mt-2 leading-relaxed">
                            Тип подключения: беспроводная<br />
                            Формат: 98%<br />
                            Размеры: 392х141х44мм<br />
                            Вес: 850г<br />
                            Наличие Hot-Swap: да<br />
                        </p>
                    </div>
                    
                    <form action="{{ route('cart.add', ['product' => $product->id ?? 1]) }}" method="POST" class="mt-10 sm:mt-12">
                @csrf
                            <div class="flex flex-wrap items-center gap-6 sm:gap-8">
                                <div class="font-rubik-semibold text-4xl sm:text-5xl text-white">9999 ₽</div>
                                <div class="flex items-center">
                                    <label for="quantity" class="font-rubik-light text-white/80 mr-2 whitespace-nowrap">Количество:</label>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1" aria-label="Количество товара" class="bg-white/10 border border-white/30 text-white p-2 rounded-md w-16 text-center">
                                </div>
                                <button type="submit" class="bg-blue-600/20 text-white border-2 border-white rounded-md py-3 px-8 sm:py-4 sm:px-10 font-rubik-semibold text-lg sm:text-xl hover:bg-blue-600/30 transition whitespace-nowrap">
                                    Добавить в корзину
                                </button>
                            </div>
                        </form>
                </section>
            </section>
        </main>

        <!-- Recommended Products -->
        <section class="mt-16 sm:mt-24">
            <h2 class="font-rubik-medium text-3xl sm:text-4xl md:text-5xl text-pink-200">ТАКЖЕ ПОКУПАЮТ</h2>
            <div class="mt-8 sm:mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-14">
                <!-- Product 1 -->
                <div class="w-full h-72 border-2 border-white/50 bg-blue-600/20 relative flex flex-col items-center rounded-xl hover:bg-blue-600/30 transition">
                    <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/80 text-center mt-6 sm:mt-9">hachiroku loud</h3>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e247a6c7b458889788d38d6139046c37bcc51787" 
                         alt="hachiroku loud keyboard" 
                         class="max-w-full max-h-full object-contain mt-auto mb-4 sm:mb-8" />
                    <div class="absolute bottom-6 sm:bottom-8">
                        <p class="font-rubik-semibold text-xl sm:text-2xl md:text-3xl font-bold rounded-3xl bg-white/80 h-12 sm:h-[50px] text-black/80 w-full max-w-[220px] flex items-center justify-center">
                            8999 рублей
                        </p>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="w-full h-72 border-2 border-white/50 bg-blue-600/20 relative flex flex-col items-center rounded-xl hover:bg-blue-600/30 transition">
                    <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/80 text-center mt-6 sm:mt-9">hachiroku night</h3>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/5911c5f235980b5f45d6a1fdedac84f3ae49016c" 
                         alt="hachiroku night keyboard" 
                         class="max-w-full max-h-full object-contain mt-auto mb-4 sm:mb-8" />
                    <div class="absolute bottom-6 sm:bottom-8">
                        <p class="font-rubik-semibold text-xl sm:text-2xl md:text-3xl font-bold rounded-3xl bg-white/80 h-12 sm:h-[50px] text-black/80 w-full max-w-[220px] flex items-center justify-center">
                            6990 рублей
                        </p>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="w-full h-72 border-2 border-white/50 bg-blue-600/20 relative flex flex-col items-center rounded-xl hover:bg-blue-600/30 transition">
                    <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/80 text-center mt-6 sm:mt-9">hachiroku superone</h3>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f1e30e2cc847e352df3581a299ba5dc39b996f14" 
                         alt="hachiroku superone keyboard" 
                         class="max-w-full max-h-full object-contain mt-auto mb-4 sm:mb-8" />
                    <div class="absolute bottom-6 sm:bottom-8">
                        <p class="font-rubik-semibold text-xl sm:text-2xl md:text-3xl font-bold rounded-3xl bg-white/80 h-12 sm:h-[50px] text-black/80 w-full max-w-[220px] flex items-center justify-center">
                            7499 рублей
                        </p>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="w-full h-72 border-2 border-white/50 bg-blue-600/20 relative flex flex-col items-center rounded-xl hover:bg-blue-600/30 transition">
                    <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/80 text-center mt-6 sm:mt-9">hachiroku mousepad</h3>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/75c420d8560eb2e7069012c42b44c3ad7cfc7700" 
                         alt="hachiroku mousepad" 
                         class="max-w-full max-h-full object-contain mt-auto mb-4 sm:mb-8" />
                    <div class="absolute bottom-6 sm:bottom-8">
                        <p class="font-rubik-semibold text-xl sm:text-2xl md:text-3xl font-bold rounded-3xl bg-white/80 h-12 sm:h-[50px] text-black/80 w-full max-w-[220px] flex items-center justify-center">
                            2499 рублей
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 sm:gap-8 pt-8 sm:pt-16">
            <h2 class="font-norwester text-3xl sm:text-4xl md:text-5xl text-pink-200">hachiroku</h2>
            <div class="flex flex-col md:flex-row gap-6 sm:gap-8 md:gap-11 w-full sm:w-auto">
                <nav class="flex flex-col gap-3 sm:gap-5 text-lg sm:text-xl md:text-2xl text-white">
                    <a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">каталог</a>
                    <a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">поддержка</a>
                    <a href="login" class="font-rubik-light hover:opacity-80 transition">вход | регистрация</a>
                </nav>
                <div class="flex flex-col gap-3 sm:gap-5 text-lg sm:text-xl md:text-2xl text-white">
                    <a href="https://vk.com/hachiroku" class="font-rubik-light hover:opacity-80 transition">наш VK</a>
                    <a href="https://t.me/hachiroku" class="font-rubik-light hover:opacity-80 transition">наш телеграм</a>
                    <a href="mailto:hachirokustore@gmail.com" class="font-rubik-light hover:opacity-80 transition">hachirokustore@gmail.com</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>