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

<div class="flex flex-col items-center w-full bg-darkBlue min-h-screen">
  <div class="flex flex-col gap-8 py-14 w-full px-4 sm:px-6 lg:px-8 max-w-[1320px]">
    <!-- Навигация -->
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

    <!-- Каталог -->
    <section class="flex flex-col gap-12">
      <h2 style="font-family:'Rubik', sans-serif;font-weight:500" class="text-4xl md:text-5xl lg:text-xxl text-pink-200 text-center">КАТАЛОГ</h2>
      
      <!-- Первый ряд карточек -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
        <!-- карточка 1 -->
        <a href="{{ url('/moonlight') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-8 text-2xl font-extrabold text-white text-opacity-80">hachiroku moonlight</h3>
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e61af8d9e4321e935ce926f19612372d1168221" alt="hachiroku moonlight product" class="mb-8 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">9999 рублей</p>
        </a>
        
        <!-- карточка 2 -->
        <a href="{{ url('/one') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-8 text-2xl font-extrabold text-white text-opacity-80">hachiroku one</h3>
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/456b5347b4d72db4f7331eae6443bf6b09c1ccfb" alt="hachiroku one product" class="mb-10 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">6990 рублей</p>
        </a>
        
        <!-- карточка 3 -->
        <a href="{{ url('/mousepad-red') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-5 text-2xl font-extrabold text-white text-opacity-80">hachiroku mousepad</h3>
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/adfef0b946752e9845baf27dced3cf0a079a4c7e" alt="hachiroku mousepad product" class="mb-5 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">2499 рублей</p>
        </a>
      </div>
      
      <!-- Второй ряд карточек -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
        <!-- карточка 4 -->
        <a href="{{ url('/space') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-10 text-2xl font-extrabold text-white text-opacity-80">hachiroku space</h3>
          <img src="https://i.ibb.co/DD03ckqG/image.png" alt="hachiroku moonlight product" class="mb-8 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">8999 рублей</p>
        </a>
        
        <!-- карточка 5 -->
        <a href="{{ url(path: '/mousepad-blue') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-8 text-2xl font-extrabold text-white text-opacity-80">hachiroku mousepad</h3>
          <img src="https://i.ibb.co/5gcGT6VP/image.png" alt="hachiroku one product" class="mb-5 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">2490 рублей</p>
        </a>
        
        <!-- карточка 6 -->
        <a href="{{ url('/superone') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-12 text-2xl font-extrabold text-white text-opacity-80">hachiroku superone</h3>
          <img src="https://i.ibb.co/PG2pQv9z/image.png" alt="hachiroku mousepad product" class="mb-5 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">7499 рублей</p>
        </a>
      </div>
      
      <!-- Третий ряд карточек -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
        <!-- карточка 7 -->
        <a href="{{ url('/loud') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-3 text-2xl font-extrabold text-white text-opacity-80">hachiroku loud</h3>
          <img src="https://i.ibb.co/DHhTnyBg/image.png" alt="hachiroku moonlight product" class="mb-8 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">8999 рублей</p>
        </a>
        
        <!-- карточка 8 -->
        <a href="{{ url('/night') }}" class="flex flex-col items-center pt-12 border-2 bg-blue-600 bg-opacity-20 h-[350px] w-full max-w-[390px] rounded-xl border-white/50">
          <h3 style="font-family:Rubik, serif; font-weight:600" class="mb-3 text-2xl font-extrabold text-white text-opacity-80">hachiroku night</h3>
          <img src="https://i.ibb.co/JjvCMFXG/image.png" alt="hachiroku mousepad product" class="mb-5 max-h-[120px]" />
          <p style="font-family:Rubik, serif; font-weight:600" class="text-3xl font-bold rounded-3xl bg-white bg-opacity-80 h-[50px] text-black text-opacity-80 w-[220px] flex items-center justify-center">6490 рублей</p>
        </a>
      </div>
    </section>

    <!-- Футер -->
    <div class="mt-12 border-t-2 border-white/20"></div>
    
    <footer class="flex flex-col sm:flex-row justify-between items-center pt-16 gap-8 sm:gap-0">
      <h2 style="font-family:'Norwester', sans-serif" class="text-4xl md:text-xxl text-pink-200">hachiroku</h2>
      
      <div class="flex flex-col sm:flex-row gap-8 sm:gap-11 items-center sm:items-start">
        <nav class="flex flex-col gap-5 text-lg md:text-xl lg:text-2xl text-white text-center sm:text-left">
        <a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">каталог</a>
                        <a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">поддержка</a>
                        <a href="login" class="font-rubik-light hover:opacity-80 transition">вход | регистрация</a>
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