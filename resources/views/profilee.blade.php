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
        .font-rubik-semibold { font-family: 'Rubik', sans-serif; font-weight: 600; }
        .input-field {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.75rem;
            border-radius: 0.375rem;
            width: 100%;
            transition: all 0.3s ease;
        }
        .input-field:focus {
            outline: none;
            border-color: rgba(255, 182, 193, 0.8);
            box-shadow: 0 0 0 2px rgba(255, 182, 193, 0.3);
        }
    </style>
</head>

<body class="bg-darkBlue">
    <div class="flex flex-col items-center w-full min-h-screen">
        <!-- Основной контейнер -->
        <div class="flex flex-col gap-6 sm:gap-8 py-8 sm:py-14 w-full px-4 sm:px-6 lg:px-8 max-w-[1320px]">
            
            <!-- Навигация -->
            <nav class="flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 sm:h-16">
                <a href="{{ url('/') }}" class="font-norwester text-4xl sm:text-5xl md:text-6xl text-pink-200">hachiroku</a>
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

            <!-- Основной контент -->
            <main class="w-full">
                <h2 class="font-rubik-semibold mt-10 sm:mt-20 mb-8 sm:mb-16 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-medium text-center text-rose-100">
                    ПРОФИЛЬ
                </h2>
                
                <section class="w-full px-0 sm:px-5 py-0 mx-auto my-0">
                    <form method="POST" action="{{ route('profile.update') }}" class="space-y-8">
                        @csrf
                        @method('PUT')
                        
                        <h3 class="font-rubik-semibold mb-6 sm:mb-10 text-2xl sm:text-3xl font-bold text-white">
                            Информация о клиенте
                        </h3>
                        
                        <div class="grid gap-6 sm:gap-8">
                            <!-- ФИО -->
                            <div class="grid gap-3 sm:gap-5 grid-cols-1 sm:grid-cols-[minmax(200px,300px)_1fr] items-center">
                                <label for="name" class="text-lg sm:text-xl md:text-2xl font-light text-white">ФИО:</label>
                                <div>
                                    <input type="text" id="name" name="name" value="{{ auth()->user()->name ?? 'Баранович Кирилл' }}" 
                                           class="input-field font-rubik-semibold text-lg sm:text-xl md:text-2xl">
                                    @error('name')
                                        <p class="text-red-400 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="grid gap-3 sm:gap-5 grid-cols-1 sm:grid-cols-[minmax(200px,300px)_1fr] items-center">
                                <label for="email" class="text-lg sm:text-xl md:text-2xl font-light text-white">Электронная почта:</label>
                                <div>
                                    <input type="email" id="email" name="email" value="{{ auth()->user()->email ?? 'baranovick26@gmail.com' }}" 
                                           class="input-field font-rubik-semibold text-lg sm:text-xl md:text-2xl break-all">
                                    @error('email')
                                        <p class="text-red-400 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Телефон -->
                            <div class="grid gap-3 sm:gap-5 grid-cols-1 sm:grid-cols-[minmax(200px,300px)_1fr] items-center">
                                <label for="phone" class="text-lg sm:text-xl md:text-2xl font-light text-white">Номер телефона:</label>
                                <div>
                                    <input type="tel" id="phone" name="phone" value="{{ auth()->user()->phone ?? '+7 (904) 119 06 59' }}" 
                                           class="input-field font-rubik-semibold text-lg sm:text-xl md:text-2xl">
                                    @error('phone')
                                        <p class="text-red-400 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Пароль -->
                            <div class="grid gap-3 sm:gap-5 grid-cols-1 sm:grid-cols-[minmax(200px,300px)_1fr] items-center">
                                <label for="password" class="text-lg sm:text-xl md:text-2xl font-light text-white">Новый пароль:</label>
                                <div>
                                    <input type="password" id="password" name="password" placeholder="Оставьте пустым, если не хотите менять" 
                                           class="input-field font-rubik-light text-lg sm:text-xl md:text-2xl">
                                    @error('password')
                                        <p class="text-red-400 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Подтверждение пароля -->
                            <div class="grid gap-3 sm:gap-5 grid-cols-1 sm:grid-cols-[minmax(200px,300px)_1fr] items-center">
                                <label for="password_confirmation" class="text-lg sm:text-xl md:text-2xl font-light text-white">Подтвердите пароль:</label>
                                <div>
                                    <input type="password" id="password_confirmation" name="password_confirmation" 
                                           class="input-field font-rubik-light text-lg sm:text-xl md:text-2xl">
                                </div>
                            </div>
                            
                            <!-- Адрес -->
                            <div class="grid gap-3 sm:gap-5 grid-cols-1 sm:grid-cols-[minmax(200px,300px)_1fr] items-center">
                                <label for="address" class="text-lg sm:text-xl md:text-2xl font-light text-white">Адрес:</label>
                                <div>
                                    <input type="text" id="address" name="address" value="{{ auth()->user()->address ?? 'г. Иркутск' }}" 
                                           class="input-field font-rubik-semibold text-lg sm:text-xl md:text-2xl">
                                    @error('address')
                                        <p class="text-red-400 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4 mt-10">
                            <button type="submit" class="bg-blue-600/20 text-white border-2 border-white rounded-md py-3 px-8 sm:py-4 sm:px-10 font-rubik-semibold text-lg sm:text-xl hover:bg-blue-600/30 transition whitespace-nowrap">
                                Сохранить изменения
                            </button>
                            <a href="{{ url('/profile') }}" class="bg-transparent text-white border-2 border-white rounded-md py-3 px-8 sm:py-4 sm:px-10 font-rubik-semibold text-lg sm:text-xl hover:bg-white/10 transition whitespace-nowrap text-center">
                                Отменить
                            </a>
                        </div>
                    </form>
                </section>
            </main>

            <div class="border-t-2 border-white/20 my-6 sm:my-8"></div>

            <!-- Футер -->
            <footer class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 sm:gap-8 pt-8 sm:pt-16">
                <h2 class="font-norwester text-3xl sm:text-4xl text-pink-200">hachiroku</h2>
                <div class="flex flex-col md:flex-row gap-6 sm:gap-8 md:gap-11 w-full sm:w-auto">
                    <nav class="flex flex-col gap-3 sm:gap-5 text-lg sm:text-xl text-white">
                        <a href="#catalog" class="font-rubik-light hover:opacity-80 transition">каталог</a>
                        <a href="#support" class="font-rubik-light hover:opacity-80 transition">поддержка</a>
                        <a href="#login" class="font-rubik-light hover:opacity-80 transition">вход | регистрация</a>
                    </nav>
                    <div class="flex flex-col gap-3 sm:gap-5 text-lg sm:text-xl text-white">
                        <a href="https://vk.com/hachiroku" class="font-rubik-light hover:opacity-80 transition">наш VK</a>
                        <a href="https://t.me/hachiroku" class="font-rubik-light hover:opacity-80 transition">наш телеграм</a>
                        <a href="mailto:hachirokustore@gmail.com" class="font-rubik-light hover:opacity-80 transition">hachirokustore@gmail.com</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>