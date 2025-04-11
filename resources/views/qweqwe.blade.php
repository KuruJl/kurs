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

<body class="bg-darkBlue">
    <div class="flex flex-col items-center w-full min-h-screen">
        <!-- Основной контейнер -->
        <div class="flex flex-col gap-8 py-8 sm:py-14 w-full px-4 sm:px-6 lg:px-8 max-w-[1320px]">
            
            <!-- Навигация -->
            <nav class="flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 sm:h-16">
                <h1 class="font-norwester text-4xl sm:text-5xl md:text-6xl text-pink-200">hachiroku</h1>
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 w-full sm:w-auto">
                    <ul class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 text-lg sm:text-xl md:text-2xl text-white">
                        <li><a href="#catalog" class="font-rubik-light hover:opacity-80 transition">каталог</a></li>
                        <li><a href="#support" class="font-rubik-light hover:opacity-80 transition">поддержка</a></li>
                        <li><a href="#cart" class="font-rubik-light hover:opacity-80 transition">корзина</a></li>
                    </ul>
                    <div class="text-lg sm:text-xl md:text-2xl text-white">
                        <a href="#login" class="font-rubik-light hover:opacity-80 transition">вход</a> |
                        <a href="#register" class="font-rubik-light hover:opacity-80 transition">регистрация</a>
                    </div>
                </div>
            </nav>

            <!-- Герой-секция -->
            <section class="flex flex-col justify-center items-center px-6 sm:px-12 md:px-24 w-full rounded-xl border-2 border-white/50 bg-Wblue py-8 sm:py-12 min-h-[200px] sm:min-h-[300px]">
                <h2 class="font-norwester mb-2 sm:mb-4 text-2xl sm:text-4xl md:text-5xl text-center text-pink-200">hachiroku is a gaming device store</h2>
                <p class="font-rubik-regular text-sm sm:text-base md:text-lg text-white text-center max-w-4xl">
                    HACHIROKU — это не просто интернет-магазин игровых девайсов, а настоящая экосистема для тех, кто живет скоростью, точностью и бескомпромиссной производительностью.
                </p>
            </section>
            
            <!-- Бестселлеры -->
            <section class="flex flex-col gap-6 sm:gap-12">
                <h2 class="font-rubik-medium text-3xl sm:text-4xl md:text-5xl text-pink-200">БЕСТСЕЛЛЕРЫ</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- Карточка 1 -->
                    <a href="#moonlight" class="flex flex-col items-center p-6 sm:pt-12 border-2 bg-blue-600/20 hover:bg-blue-600/30 transition rounded-xl border-white/50 h-full">
                        <h3 class="font-rubik-semibold mb-4 sm:mb-8 text-xl sm:text-2xl text-white/80 text-center">hachiroku moonlight</h3>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e61af8d9e4321e935ce926f19612372d1168221" 
                             alt="hachiroku moonlight product" 
                             class="w-full max-w-[180px] h-auto mb-4 sm:mb-8" />
                        <p class="font-rubik-semibold text-xl sm:text-2xl md:text-3xl font-bold rounded-3xl bg-white/80 h-12 sm:h-[50px] text-black/80 w-full max-w-[220px] flex items-center justify-center">
                            9999 рублей
                        </p>
                    </a>

                    <!-- Карточка 2 -->
                    <a href="#one" class="flex flex-col items-center p-6 sm:pt-12 border-2 bg-blue-600/20 hover:bg-blue-600/30 transition rounded-xl border-white/50 h-full">
                        <h3 class="font-rubik-semibold mb-4 sm:mb-8 text-xl sm:text-2xl text-white/80 text-center">hachiroku one</h3>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/456b5347b4d72db4f7331eae6443bf6b09c1ccfb" 
                             alt="hachiroku one product" 
                             class="w-full max-w-[180px] h-auto mb-4 sm:mb-8" />
                        <p class="font-rubik-semibold text-xl sm:text-2xl md:text-3xl font-bold rounded-3xl bg-white/80 h-12 sm:h-[50px] text-black/80 w-full max-w-[220px] flex items-center justify-center">
                            6990 рублей
                        </p>
                    </a>

                    <!-- Карточка 3 -->
                    <a href="#mousepad" class="flex flex-col items-center p-6 sm:pt-12 border-2 bg-blue-600/20 hover:bg-blue-600/30 transition rounded-xl border-white/50 h-full">
                        <h3 class="font-rubik-semibold mb-4 sm:mb-5 text-xl sm:text-2xl text-white/80 text-center">hachiroku mousepad</h3>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/adfef0b946752e9845baf27dced3cf0a079a4c7e" 
                             alt="hachiroku mousepad product" 
                             class="w-full max-w-[180px] h-auto mb-4 sm:mb-5" />
                        <p class="font-rubik-semibold text-xl sm:text-2xl md:text-3xl font-bold rounded-3xl bg-white/80 h-12 sm:h-[50px] text-black/80 w-full max-w-[220px] flex items-center justify-center">
                            2499 рублей
                        </p>
                    </a>
                </div>
            </section>

            <!-- Категории -->
            <section class="flex flex-col gap-6 sm:gap-12 mb-6 sm:mb-10">
                <h2 class="font-rubik-medium text-3xl sm:text-4xl md:text-5xl text-pink-200">КАТЕГОРИИ</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <a href="#" class="font-rubik-medium text-base sm:text-lg text-white border-2 border-dashed border-white hover:border-solid hover:bg-white/10 transition h-16 sm:h-[84px] flex items-center justify-center rounded-lg">
                        МЫШКИ
                    </a>
                    <a href="#" class="font-rubik-medium text-base sm:text-lg text-white border-2 border-dashed border-white hover:border-solid hover:bg-white/10 transition h-16 sm:h-[84px] flex items-center justify-center rounded-lg">
                        КЛАВИАТУРЫ
                    </a>
                    <a href="#" class="font-rubik-medium text-base sm:text-lg text-white border-2 border-dashed border-white hover:border-solid hover:bg-white/10 transition h-16 sm:h-[84px] flex items-center justify-center rounded-lg">
                        КОВРИКИ
                    </a>
                    <a href="#" class="font-rubik-medium text-base sm:text-lg text-white border-2 border-dashed border-white hover:border-solid hover:bg-white/10 transition h-16 sm:h-[84px] flex items-center justify-center rounded-lg">
                        НАУШНИКИ
                    </a>
                </div>
            </section>

            <!-- История -->
            <section class="flex flex-col lg:flex-row gap-6 sm:gap-10 md:gap-16">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/22f887d00c4f1b67d95bda86ba03c0f7dcb860dd" 
                     alt="Hachiroku company image" 
                     class="w-full lg:w-1/2 h-auto object-cover rounded-xl" />
                
                <div class="flex flex-col gap-4 sm:gap-6 lg:w-1/2">
                    <p class="font-rubik-light text-base sm:text-lg md:text-xl text-white text-justify">
                        Компания Hachiroku была основана в 2010 году группой увлеченных геймеров и инженеров, которые стремились создать инновационные и высококачественные игровые девайсы.
                    </p>
                    <p class="font-rubik-light text-base sm:text-lg md:text-xl text-white text-justify">
                        С первых дней своего существования Hachiroku зарекомендовала себя как лидер в индустрии игровых технологий, постоянно разрабатывая устройства, которые поднимают опыт геймеров на новый уровень.
                    </p>
                    <p class="font-rubik-light text-base sm:text-lg md:text-xl text-white text-justify">
                        Наши достижения включают множество инновационных разработок, таких как адаптивные контроллеры, ультраточные мыши и наушники с иммерсивным звуком.
                    </p>
                </div>
            </section>

            <div class="border-t-2 border-white/20 my-8 sm:my-12"></div>

            <!-- Футер -->
            <footer class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 sm:gap-8 pt-8 sm:pt-16">
                <h2 class="font-norwester text-3xl sm:text-4xl md:text-5xl text-pink-200">hachiroku</h2>
                <div class="flex flex-col md:flex-row gap-6 sm:gap-8 md:gap-11 w-full sm:w-auto">
                    <nav class="flex flex-col gap-3 sm:gap-5 text-lg sm:text-xl md:text-2xl text-white">
                        <a href="#catalog" class="font-rubik-light hover:opacity-80 transition">каталог</a>
                        <a href="#support" class="font-rubik-light hover:opacity-80 transition">поддержка</a>
                        <a href="#login" class="font-rubik-light hover:opacity-80 transition">вход | регистрация</a>
                    </nav>
                    <div class="flex flex-col gap-3 sm:gap-5 text-lg sm:text-xl md:text-2xl text-white">
                        <a href="https://vk.com/hachiroku" class="font-rubik-light hover:opacity-80 transition">наш VK</a>
                        <a href="https://t.me/hachiroku" class="font-rubik-light hover:opacity-80 transition">наш телеграм</a>
                        <a href="mailto:hachirokustore@gmail.com" class="font-rubik-light hover:opacity-80 transition">hachirokustore@gmail.com</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>