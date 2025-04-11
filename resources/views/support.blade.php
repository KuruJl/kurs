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
        .font-rubik-medium { font-family: 'Rubik', sans-serif; font-weight: 500; }
    </style>
</head>

<body class="bg-darkBlue">
    <div class="flex flex-col items-center w-full min-h-screen">
        <!-- Основной контейнер -->
        <div class="flex flex-col gap-6 sm:gap-8 py-8 sm:py-14 w-full px-4 sm:px-6 lg:px-8 max-w-[1320px]">
            
            <!-- Навигация -->
            <nav class="flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 sm:h-16">
                <a  href="{{ url(path: '/index') }}" class="font-norwester text-4xl sm:text-5xl md:text-6xl text-pink-200">hachiroku</a>
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 w-full sm:w-auto">
                    <ul class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 md:gap-11 text-lg sm:text-xl md:text-2xl text-white">
                        <li><a href="{{ url('/catalog') }}" class="font-rubik-light hover:opacity-80 transition">каталог</a></li>
                        <li><a href="{{ url('/support') }}" class="font-rubik-light hover:opacity-80 transition">поддержка</a></li>
                        <li><a href="{{ url('/cart') }}" class="font-rubik-light hover:opacity-80 transition">корзина</a></li>
                    </ul>
                    <div class="text-lg sm:text-xl md:text-2xl text-white">
                        <a href="login" class="font-rubik-light hover:opacity-80 transition">вход</a> |
                        <a href="register" class="font-rubik-light hover:opacity-80 transition">регистрация</a>
                    </div>
                </div>
            </nav>

            <!-- Основной контент -->
            <main class="flex flex-col items-center gap-6 sm:gap-8">
                <h2 class="font-rubik-medium text-center text-2xl sm:text-3xl text-white max-w-[954px] px-4">
                    По вопросам поддержки пишите на почту, вк или телеграмм :)
                </h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 md:gap-8 w-full">
                    <a href="https://t.me/hachiroku" 
                       class="font-rubik-medium text-base sm:text-lg text-white border-2 border-dashed border-white hover:border-solid hover:bg-white/10 transition h-16 sm:h-[84px] flex items-center justify-center rounded-lg">
                        ТЕЛЕГРАМ
                    </a>
                    <a href="https://vk.com/hachiroku" 
                       class="font-rubik-medium text-base sm:text-lg text-white border-2 border-dashed border-white hover:border-solid hover:bg-white/10 transition h-16 sm:h-[84px] flex items-center justify-center rounded-lg">
                        ВКОНТАКТЕ
                    </a>
                    <a href="mailto:hachirokustore@gmail.com" 
                       class="font-rubik-medium text-base sm:text-lg text-white border-2 border-dashed border-white hover:border-solid hover:bg-white/10 transition h-16 sm:h-[84px] flex items-center justify-center rounded-lg">
                        ПОЧТА
                    </a>
                </div>
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