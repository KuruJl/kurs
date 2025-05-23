<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hachiroku moonlight - Клавиатура</title>

    <link href="{{ asset('resources/css/fonts.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/norwester" rel="stylesheet">

    <style>
        .font-norwester { font-family: 'Norwester', sans-serif; }
        body { font-family: 'Rubik', sans-serif; font-weight: 400; }
        .font-rubik-light { font-family: 'Rubik', sans-serif; font-weight: 300; }
        .font-rubik-regular { font-family: 'Rubik', sans-serif; font-weight: 400; }
        .font-rubik-medium { font-family: 'Rubik', sans-serif; font-weight: 500; }
        .font-rubik-semibold { font-family: 'Rubik', sans-serif; font-weight: 600; }

        /* Стили для счетчика количества */
        .quantity-selector {
            display: inline-flex;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 0.375rem;
            overflow: hidden;
            height: 42px;
        }

        .quantity-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 1rem;
        }

        .quantity-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .quantity-input {
            width: 50px;
            height: 100%;
            text-align: center;
            border: none;
            border-left: 1px solid rgba(255, 255, 255, 0.3);
            border-right: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            -moz-appearance: textfield;
            padding: 0;
        }

        .quantity-input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        }

        .quantity-input::-webkit-outer-spin-button,
        .quantity-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        label[for="quantity"] {
            font-family: 'Rubik', sans-serif;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.8);
            margin-right: 0.5rem;
        }
    </style>
</head>
<body class="bg-darkBlue text-white/80 min-h-screen w-full font-rubik-regular">
    <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-14">

        <header class="flex flex-wrap justify-between items-center gap-4 mb-8 sm:mb-12">
        <a  href="{{ url(path: '/') }}" class="font-norwester text-4xl sm:text-5xl md:text-6xl text-pink-200">hachiroku</a>
        <nav class="flex items-center gap-4 sm:gap-6 md:gap-11">
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
        </nav>
    </header>

    <main class="flex flex-col lg:flex-row gap-8 sm:gap-10 md:gap-16">

        <section class="w-full lg:w-auto lg:max-w-xl flex-shrink-0"> <div class="border border-white/30 w-full aspect-[4/3] flex items-center justify-center rounded-lg overflow-hidden">
                        <img src="https://i.ibb.co/DDy8g6mY/image-18.png" alt="Клавиатура hachiroku moonlight - вид сверху" class="max-w-full max-h-full object-contain" />
                    </div>
                    <div class="flex gap-3 mt-4"> <div class="border border-white/30 flex-1 aspect-square flex items-center justify-center rounded overflow-hidden cursor-pointer hover:border-white/70 transition"> <img src="https://i.ibb.co/CsSK81zc/image-19.png" alt="hachiroku moonlight - миниатюра 1" class="max-w-full max-h-full object-contain" />
                        </div>
                        <div class="border border-white/30 flex-1 aspect-square flex items-center justify-center rounded overflow-hidden cursor-pointer hover:border-white/70 transition"> <img src="https://i.ibb.co/DDy8g6mY/image-18.png" alt="hachiroku moonlight - миниатюра 2" class="max-w-full max-h-full object-contain" />
                        </div>
                        <div class="border border-white/30 flex-1 aspect-square flex items-center justify-center rounded overflow-hidden cursor-pointer hover:border-white/70 transition"> <img src="https://i.ibb.co/CsSK81zc/image-19.png" alt="hachiroku moonlight - миниатюра 3" class="max-w-full max-h-full object-contain" />
                        </div>
                    </div>
                </section>

                <section class="flex-1">
                    <h1 class="font-rubik-semibold text-4xl sm:text-5xl md:text-6xl text-white">hachiroku mousepad-blue</h1>

                    <div class="mt-6 sm:mt-8">
                        <h2 class="font-rubik-medium text-xl sm:text-2xl text-white/90">Описание</h2>
                        <p class="font-rubik-light text-lg sm:text-xl text-white/80 mt-2 leading-relaxed">
                        Тканевый коврик outlines выполнен из высококачественного полиэстера толщиной 4 мм. Плотное плетение нитей с мелкой фактурой гарантирует оптимальное сочетание скорости и контроля. Коврик уверенно фиксируется на столе благодаря цепкому прорезиненному основанию.
                        </p>
                    </div>

                    <div class="mt-8 sm:mt-10">
                        <h2 class="font-rubik-medium text-xl sm:text-2xl text-white/90">Характеристики</h2>
                        <ul class="font-rubik-light text-lg sm:text-xl text-white/80 mt-2 leading-relaxed list-disc list-inside">
                            <li>Тип подключения: проводная</li>
                            <li>Формат: TKL (Tenkeyless)</li>
                            <li>Размеры: 398 х 172 х 104 мм</li>
                            <li>Вес: 850 г</li>
                            <li>Наличие Hot-Swap: да</li>
                            <li>Длина съемного кабеля: 1.8 м</li>
                        </ul>
                    </div>

                    <form action="{{ route('cart.add', ['product' => $product->id ?? 1]) }}" method="POST" class="mt-10 sm:mt-12">
                        @csrf
                        <div class="flex flex-wrap items-center gap-6 sm:gap-8">
                            <div class="font-rubik-semibold text-4xl sm:text-5xl text-white">9999 ₽</div>
                            <div class="flex items-center">
                                <label for="quantity" class="font-rubik-light text-white/80 mr-2 whitespace-nowrap">Количество:</label>
                                <div class="quantity-selector">
                                    <button type="button" class="quantity-btn minus" onclick="this.nextElementSibling.stepDown()">−</button>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" aria-label="Количество товара" class="quantity-input">
                                    <button type="button" class="quantity-btn plus" onclick="this.previousElementSibling.stepUp()">+</button>
                                </div>
                            </div>
                            <button type="submit" class="bg-blue-600/20 text-white border-2 border-white rounded-md py-3 px-8 sm:py-4 sm:px-10 font-rubik-semibold text-lg sm:text-xl hover:bg-blue-600/30 transition whitespace-nowrap">
                                Добавить в корзину
                            </button>
                            <label for="" class="font-rubik-light text-white/80 mr-2 whitespace-nowrap">В наличии</label>
                            {{ $product->quantity }}
                        </div>
                    </form>
                </section>
            </main>

            <section class="mt-16 sm:mt-24">
            <h2 class="font-rubik-medium text-3xl sm:text-4xl text-pink-200">ТАКЖЕ ПОКУПАЮТ</h2>
            <div class="mt-8 sm:mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">

                <a href="{{ url('moonlight') }}" class="border border-white/30 bg-blue-600/10 rounded-xl overflow-hidden group flex flex-col text-center hover:bg-blue-600/20 transition duration-300 aspect-[1/1]">
                    <div class="p-4 sm:p-6 flex-grow flex flex-col justify-center">
                        <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/90 mb-2">hachiroku loud</h3>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e247a6c7b458889788d38d6139046c37bcc51787" alt="Клавиатура hachiroku loud" class="max-w-[80%] max-h-[120px] object-contain mx-auto my-2 group-hover:scale-105 transition duration-300" />
                    </div>
                    <div class="mt-auto p-4 pt-0">
                        <p class="font-rubik-semibold text-xl md:text-2xl rounded-full bg-white/80 text-black/80 py-2 px-4 inline-block">
                            8999 ₽ </p>
                    </div>
                </a>

                <a href="{{ url('night') }}" class="border border-white/30 bg-blue-600/10 rounded-xl overflow-hidden group flex flex-col text-center hover:bg-blue-600/20 transition duration-300 aspect-[1/1]">
                    <div class="p-4 sm:p-6 flex-grow flex flex-col justify-center">
                        <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/90 mb-2">hachiroku night</h3>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/5911c5f235980b5f45d6a1fdedac84f3ae49016c" alt="Клавиатура hachiroku night" class="max-w-[80%] max-h-[120px] object-contain mx-auto my-2 group-hover:scale-105 transition duration-300" />
                    </div>
                    <div class="mt-auto p-4 pt-0">
                        <p class="font-rubik-semibold text-xl md:text-2xl rounded-full bg-white/80 text-black/80 py-2 px-4 inline-block">
                            6990 ₽
                        </p>
                    </div>
                </a>

                <a href="{{ url('superone') }}" class="border border-white/30 bg-blue-600/10 rounded-xl overflow-hidden group flex flex-col text-center hover:bg-blue-600/20 transition duration-300 aspect-[1/1]">
                    <div class="p-4 sm:p-6 flex-grow flex flex-col justify-center">
                        <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/90 mb-2">hachiroku superone</h3>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f1e30e2cc847e352df3581a299ba5dc39b996f14" alt="Клавиатура hachiroku superone" class="max-w-[80%] max-h-[120px] object-contain mx-auto my-2 group-hover:scale-105 transition duration-300" />
                    </div>
                    <div class="mt-auto p-4 pt-0">
                        <p class="font-rubik-semibold text-xl md:text-2xl rounded-full bg-white/80 text-black/80 py-2 px-4 inline-block">
                            7499 ₽
                        </p>
                    </div>
                </a>

                <a href="{{ url('mousepad-red') }}" class="border border-white/30 bg-blue-600/10 rounded-xl overflow-hidden group flex flex-col text-center hover:bg-blue-600/20 transition duration-300 aspect-[1/1]">
                    <div class="p-4 sm:p-6 flex-grow flex flex-col justify-center">
                        <h3 class="font-rubik-semibold text-xl sm:text-2xl text-white/90 mb-2">hachiroku mousepad</h3>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/75c420d8560eb2e7069012c42b44c3ad7cfc7700" alt="Коврик hachiroku mousepad" class="max-w-[80%] max-h-[120px] object-contain mx-auto my-2 group-hover:scale-105 transition duration-300" />
                    </div>
                    <div class="mt-auto p-4 pt-0">
                        <p class="font-rubik-semibold text-xl md:text-2xl rounded-full bg-white/80 text-black/80 py-2 px-4 inline-block">
                            2499 ₽
                        </p>
                    </div>
                </a>

            </div>
        </section>

        <footer class="border-t border-white/20 mt-16 sm:mt-24 pt-8 sm:pt-12 flex flex-wrap justify-between items-start gap-8">
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="font-norwester text-3xl sm:text-4xl md:text-5xl text-pink-200 hover:opacity-90 transition">hachiroku</a>
            </div>
            <div class="flex flex-col sm:flex-row flex-wrap justify-end gap-8 sm:gap-12 md:gap-16 text-lg sm:text-xl text-white">
                <nav class="flex flex-col gap-3 sm:gap-4">
                    <h3 class="font-rubik-medium text-white/90 mb-1">Навигация</h3> <a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">Каталог</a>
                    <a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">Поддержка</a>
                    <a href="{{ route('login') }}" class="font-rubik-light hover:opacity-80 transition">Вход | Регистрация</a>
                </nav>
                <div class="flex flex-col gap-3 sm:gap-4">
                    <h3 class="font-rubik-medium text-white/90 mb-1">Связь</h3> <a href="https://vk.com/hachiroku" target="_blank" rel="noopener noreferrer" class="font-rubik-light hover:opacity-80 transition">Наш VK</a> <a href="https://t.me/hachiroku" target="_blank" rel="noopener noreferrer" class="font-rubik-light hover:opacity-80 transition">Наш Telegram</a> <a href="mailto:hachirokustore@gmail.com" class="font-rubik-light hover:opacity-80 transition">hachirokustore@gmail.com</a>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>