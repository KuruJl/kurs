<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('resources/css/fonts.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/norwester" rel="stylesheet">
    <title>Корзина - hachiroku</title>
    <style>
        .font-norwester { font-family: 'Norwester', sans-serif; }
        .font-rubik-light { font-family: 'Rubik', sans-serif; font-weight: 300; }
        .font-rubik-regular { font-family: 'Rubik', sans-serif; font-weight: 400; }
        .font-rubik-medium { font-family: 'Rubik', sans-serif; font-weight: 500; }
        .font-rubik-semibold { font-family: 'Rubik', sans-serif; font-weight: 600; }
    </style>
</head>
<body class="bg-darkBlue">
<div class="flex flex-col items-center w-full min-h-screen">
    <div class="flex flex-col gap-8 py-14 w-full px-4 sm:px-6 lg:px-8 max-w-[1320px]">
    <nav class="flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 sm:h-16">
                <a  href="{{ url(path: '/') }}" class="font-norwester text-4xl sm:text-5xl md:text-6xl text-pink-200">hachiroku</a>
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 w-full sm:w-auto">
                    <ul class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 text-lg sm:text-xl md:text-2xl text-white">
                        <li><a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">каталог</a></li>
                        <li><a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">поддержка</a></li>
                        <li><a href="{{ url('/cart') }}" class="font-rubik-light hover:opacity-80 transition">корзина</a></li>
                        <li><a href="{{ url('/profilee') }}" class="font-rubik-light hover:opacity-80 transition">профиль</a></li>
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

        <h2 style="font-family:'Rubik', sans-serif;font-weight:500" class="text-4xl md:text-5xl lg:text-xxl text-pink-200 text-center">КОРЗИНА</h2>

        <div class="flex flex-col gap-8 w-full">
            @if(count($cart) > 0)
                @foreach($cart as $id => $details)
                    <div class="flex flex-col sm:flex-row items-center p-6 sm:p-10 w-full rounded-xl border border-white gap-6 sm:gap-0">
                        <img src="{{ $details['image'] }}" alt="{{ $details['name'] }}" class="w-full sm:w-auto sm:h-[150px] object-cover rounded-md"/>
                        <div class="flex flex-col sm:flex-row flex-1 justify-between items-center w-full sm:ml-8 gap-6 sm:gap-0">
                            <h2 style="font-family:Rubik, serif; font-weight:600" class="text-2xl sm:text-3xl text-white text-center sm:text-left">{{ $details['name'] }}</h2>

                            <div class="flex flex-col sm:flex-row gap-6 sm:gap-12 items-center">
                                <div style="font-family:Rubik, serif; font-weight:600" class="flex gap-4 items-center">
                                    <form action="{{ route('cart.update', $id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ max(1, $details['quantity'] - 1) }}">
                                        <button type="submit" aria-label="Decrease quantity" class="w-5 h-5 text-3xl font-bold text-black bg-white rounded-sm cursor-pointer flex items-center justify-center">-</button>
                                    </form>
                                    <span class="text-3xl font-bold text-white">{{ $details['quantity'] }}</span>
                                    <form action="{{ route('cart.update', $id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ $details['quantity'] + 1 }}">
                                        <button type="submit" aria-label="Increase quantity" class="w-5 h-5 text-3xl font-medium text-black bg-white rounded-sm cursor-pointer flex items-center justify-center">+</button>
                                    </form>
                                </div>

                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" aria-label="Remove item" class="cursor-pointer">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 opacity-50">
                                            <path d="M11.5 6H16.5C16.5 5.33696 16.2366 4.70107 15.7678 4.23223C15.2989 3.76339 14.663 3.5 14 3.5C13.337 3.5 12.7011 3.76339 12.2322 4.23223C11.7634 4.70107 11.5 5.33696 11.5 6ZM10 6C10 4.93913 10.4214 3.92172 11.1716 3.17157C11.9217 2.42143 12.9391 2 14 2C15.0609 2 16.0783 2.42143 16.8284 3.17157C17.5786 3.92172 18 4.93913 18 6H24.25C24.4489 6 24.6397 6.07902 24.7803 6.21967C24.921 6.36032 25 6.55109 25 6.75C25 6.94891 24.921 7.13968 24.7803 7.28033C24.6397 7.42098 24.4489 7.5 24.25 7.5H22.94L21.723 22.103C21.6345 23.1653 21.1499 24.1556 20.3655 24.8774C19.5811 25.5992 18.554 25.9999 17.488 26H10.512C9.44599 25.9999 8.41894 25.5992 7.6345 24.8774C6.85007 24.1556 6.36554 23.1653 6.277 22.103L5.06 7.5H3.75C3.55109 7.5 3.36032 7.42098 3.21967 7.28033C3.07902 7.13968 3 6.94891 3 6.75C3 6.55109 3.07902 6.36032 3.21967 6.21967C3.36032 6.07902 3.55109 6 3.75 6H10ZM7.772 21.978C7.82919 22.6654 8.14262 23.3062 8.65015 23.7734C9.15767 24.2405 9.82222 24.4999 10.512 24.5H17.488C18.1778 24.4999 18.8423 24.2405 19.3499 23.7734C19.8574 23.3062 20.1708 22.6654 20.228 21.978L21.436 7.5H6.565L7.772 21.978ZM11.75 11C11.9489 11 12.1397 11.079 12.2803 11.2197C12.421 11.3603 12.5 11.5511 12.5 11.75V20.25C12.5 20.4489 12.421 20.6397 12.2803 20.7803C12.1397 20.921 11.9489 21 11.75 21C11.5511 21 11.3603 20.921 11.2197 20.7803C11.079 20.6397 11 20.4489 11 20.25V11.75C11 11.5511 11.079 11.3603 11.2197 11.2197C11.3603 11.079 11.5511 11 11.75 11ZM17 11.75C17 11.5511 16.921 11.3603 16.7803 11.2197C16.6397 11.079 16.4489 11 16.25 11C16.0511 11 15.8603 11.079 15.7197 11.2197C15.579 11.3603 15.5 11.5511 15.5 11.75V20.25C15.5 20.4489 15.579 20.6397 15.7197 20.7803C15.8603 20.921 16.0511 21 16.25 21C16.4489 21 16.6397 20.921 16.7803 20.7803C16.921 20.6397 17 20.4489 17 20.25V11.75Z" fill="#D00000"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                            <div style="font-family:Rubik, serif; font-weight:600" class="text-3xl sm:text-4xl lg:text-xxl font-medium text-white text-opacity-80">{{ number_format($details['price'] * $details['quantity'], 0, '.', ' ') }} ₽</div>
                        </div>
                    </div>
                @endforeach

                <div class="flex justify-end w-full mt-12">
                    <div class="flex flex-col items-end gap-4">
                        <div style="font-family:Rubik, serif; font-weight:600" class="text-3xl text-white">
                                                    Итого: {{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart)), 0, '.', ' ') }} ₽
                        </div>
                        <a href="#" class="w-full sm:w-[400px] h-20 text-xl sm:text-2xl lg:text-3xl font-bold rounded-md border-2 border-white cursor-pointer bg-blue-600 bg-opacity-20 text-white flex items-center justify-center hover:bg-opacity-30 transition">
                            Оформить заказ
                        </a>
                    </div>
                </div>
            @else
                <p class="text-2xl text-white text-center">Ваша корзина пуста.</p>
            @endif
        </div>

        <div class="mt-12 border-t-2 border-white/20"></div>

        <footer class="flex flex-col sm:flex-row justify-between items-center pt-16 gap-8 sm:gap-0">
            <h2 style="font-family:'Norwester', sans-serif" class="text-4xl md:text-xxl text-pink-200">hachiroku</h2>

            <div class="flex flex-col sm:flex-row gap-8 sm:gap-11 items-center sm:items-start">
                <nav class="flex flex-col gap-5 text-lg md:text-xl lg:text-2xl text-white text-center sm:text-left">
                    <a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">каталог</a>
                    <a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">поддержка</a>
                    <a href="{{ route('login') }}" class="font-rubik-light hover:opacity-80 transition">вход | регистрация</a>
                </nav>

                <div class="flex flex-col gap-5 text-lg md:text-xl lg:text-2xl text-white text-center sm:text-left">
                    <a style="font-family:Rubik, serif; font-weight:300" href="https://vk.com/hachiroku">наш VK</a>
                    <a style="font-family:Rubik, serif; font-weight:300" href="https://t.me/hachiroku">наш телеграм</a>
                    <a style="font-family:Rubik, serif; font-weight:300" href="mailto:hachirokustore@gmail.com">hachirokustore@gmail.com</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>