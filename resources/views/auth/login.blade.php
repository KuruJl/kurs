
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hachiroku - Вход</title>
  <link href="{{ asset('resources/css/fonts.css') }}" rel="stylesheet"> @vite('resources/css/app.css') <link rel="preconnect" href="https://fonts.googleapis.com">
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
    .bg-darkBlue { background-color: #0f172a; }
    .text-pink-200 { color: #fbcfe8; }
    /* Дополнительные стили могут быть здесь или в app.css */
  </style>
</head>
<body class="bg-darkBlue text-white/80 min-h-screen w-full font-rubik-regular flex flex-col">

  <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 w-full">
    <header class="flex flex-wrap justify-between items-center gap-4 py-8 sm:py-10 mb-8 sm:mb-12">
      <a href="{{ url('/') }}" class="font-norwester text-4xl sm:text-5xl md:text-6xl text-pink-200">hachiroku</a>
      <nav class="flex items-center gap-4 sm:gap-6 md:gap-11">
        <ul class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 text-lg sm:text-xl md:text-2xl text-white">
          <li><a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">каталог</a></li>
          <li><a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">поддержка</a></li>
          <li><a href="{{ url('/cart') }}" class="font-rubik-light hover:opacity-80 transition">корзина</a></li>
          @auth
            <li><a href="{{ url('/profile') }}" class="font-rubik-light hover:opacity-80 transition">профиль</a></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="font-rubik-light hover:opacity-80 transition hover:text-red-600">Выйти</button>
              </form>
            </li>
          @else
            <li><a href="{{ route('login') }}" class="font-rubik-light hover:opacity-80 transition text-pink-200">Вход</a></li> <li><a href="{{ route('register') }}" class="font-rubik-light hover:opacity-80 transition">Регистрация</a></li>
          @endauth
        </ul>
      </nav>
    </header>
  </div>

  <main class="flex-grow flex flex-col items-center justify-center py-10 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-lg bg-slate-800/30 p-8 sm:p-10 rounded-xl shadow-xl">
      <div class="text-center mb-8">
        <h1 class="font-rubik-semibold text-3xl sm:text-4xl text-pink-200">Вход в аккаунт</h1>
      </div>

      <x-auth-session-status class="mb-6 p-3 rounded-md bg-green-500/20 text-green-300 font-rubik-regular text-sm" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
          <x-input-label for="email" :value="__('Email')" class="block font-rubik-regular text-lg text-white/80 mb-1" />
          <x-text-input id="email" class="block mt-1 w-full bg-white/10 border border-white/30 text-white font-rubik-light p-3 rounded-md focus:border-pink-200 focus:ring focus:ring-pink-200 focus:ring-opacity-50 placeholder-white/50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-400 font-rubik-light" />
        </div>

        <div class="mt-6">
          <x-input-label for="password" :value="__('Пароль')" class="block font-rubik-regular text-lg text-white/80 mb-1" />
          <x-text-input id="password" class="block mt-1 w-full bg-white/10 border border-white/30 text-white font-rubik-light p-3 rounded-md focus:border-pink-200 focus:ring focus:ring-pink-200 focus:ring-opacity-50 placeholder-white/50"
                  type="password"
                  name="password"
                  required autocomplete="current-password" />
          <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-400 font-rubik-light" />
        </div>

        <div class="block mt-6">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="h-5 w-5 rounded bg-white/10 border-white/30 text-pink-200 shadow-sm focus:ring-pink-200/50 focus:ring-offset-slate-800/30" name="remember">
            <span class="ms-2 font-rubik-light text-sm text-white/70">{{ __('Запомнить меня') }}</span>
          </label>
        </div>

        

          <x-primary-button class="w-full  sm:w-auto inline-flex items-center justify-center px-8 py-3 border-2 border-white bg-blue-600/20 text-white font-rubik-semibold text-lg rounded-md hover:bg-blue-600/30 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-darkBlue focus:ring-white">
            {{ __('Войти') }}
          </x-primary-button>
        
        <div class="mt-8 text-center">
          <p class="font-rubik-light text-sm text-white/70">
            Нет аккаунта?
            <a href="{{ route('register') }}" class="font-rubik-medium text-pink-200 hover:underline">
              Зарегистрироваться
            </a>
          </p>
        </div>
      </form>
    </div>
  </main>

  <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 w-full">
    <footer class="border-t border-white/20 mt-12 sm:mt-16 pt-8 sm:pt-12 pb-8 flex flex-wrap justify-between items-start gap-8">
      <a href="{{ url('/') }}" class="font-norwester text-3xl sm:text-4xl text-pink-200">hachiroku</a>
      <div class="flex flex-col sm:flex-row items-start gap-8 md:gap-11">
        <nav class="flex flex-col gap-3 sm:gap-4 text-lg text-white/80">
          <a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-100 transition">каталог</a>
          <a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-100 transition">поддержка</a>
          @guest
            <a href="{{ route('login') }}" class="font-rubik-light hover:opacity-100 transition">вход | регистрация</a>
          @endguest
        </nav>
        <div class="flex flex-col gap-3 sm:gap-4 text-lg text-white/80">
          <a href="https://vk.com/hachiroku" target="_blank" rel="noopener noreferrer" class="font-rubik-light hover:opacity-100 transition">наш VK</a>
          <a href="https://t.me/hachiroku" target="_blank" rel="noopener noreferrer" class="font-rubik-light hover:opacity-100 transition">наш телеграм</a>
          <a href="mailto:hachirokustore@gmail.com" class="font-rubik-light hover:opacity-100 transition">hachirokustore@gmail.com</a>
        </div>
      </div>
    </footer>
  </div>

</body>
</html>