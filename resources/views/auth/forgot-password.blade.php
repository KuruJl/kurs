<x-guest-layout>
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
                        <li><a href="{{ route('login') }}" class="font-rubik-light hover:opacity-80 transition text-pink-200">Вход</a></li>
                        <li><a href="{{ route('register') }}" class="font-rubik-light hover:opacity-80 transition">Регистрация</a></li>
                    @endauth
                </ul>
            </nav>
        </header>
    </div>

    <main class="flex-grow flex flex-col items-center justify-center py-10 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-lg bg-slate-800/30 p-8 sm:p-10 rounded-xl shadow-xl">
            <div class="text-center mb-8">
                <h1 class="font-rubik-semibold text-3xl sm:text-4xl text-pink-200">{{ __('Восстановление пароля') }}</h1>
            </div>

            <div class="mb-6 text-lg sm:text-xl text-white/80 font-rubik-regular">
                {{ __('Забыли пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы отправим вам ссылку для сброса пароля, которая позволит вам выбрать новый.') }}
            </div>

            <x-auth-session-status class="mb-6 p-3 rounded-md bg-green-500/20 text-green-300 font-rubik-regular text-sm" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Email')" class="block font-rubik-regular text-lg text-white/80 mb-1" />
                    <x-text-input id="email" class="block mt-1 w-full bg-white/10 border border-white/30 text-white font-rubik-light p-3 rounded-md focus:border-pink-200 focus:ring focus:ring-pink-200 focus:ring-opacity-50 placeholder-white/50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-400 font-rubik-light" />
                </div>

                <div class="flex items-center justify-end mt-8">
                    <x-primary-button class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3 border-2 border-white bg-blue-600/20 text-white font-rubik-semibold text-lg rounded-md hover:bg-blue-600/30 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-darkBlue focus:ring-white">
                        {{ __('Отправить ссылку для сброса пароля') }}
                    </x-primary-button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <p class="font-rubik-light text-sm text-white/70">
                    <a href="{{ route('login') }}" class="font-rubik-medium text-pink-200 hover:underline">
                        {{ __('Вернуться ко входу') }}
                    </a>
                </p>
            </div>
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
</x-guest-layout>