<!DOCTYPE html>
<html lang="en" dir="rtl">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<title>@yield('title', 'LaravelShop')</title>
</head>

<body>

    <div
        class="flex flex-wrap items-center justify-center sm:justify-between gap-4 sm:gap-6 w-full bg-gray-300 px-4 py-3">

        <div class="flex items-center gap-2">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/garanti.png') }}" alt="تضمین اصالت">
            <p class="text-sm text-gray-700 font-medium">تضمین اصالت کالا</p>
        </div>

        <div class="flex items-center gap-2">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/send.png') }}" alt="ارسال رایگان">
            <p class="text-sm text-gray-700 font-medium">ارسال رایگان برای سفارشات بالای ۲۰ میلیون تومان</p>
        </div>

        <div class="flex items-center gap-2">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/support.png') }}" alt="پشتیبانی ۲۴ ساعته">
            <p class="text-sm text-gray-700 font-medium">پشتیبانی ۲۴ ساعته</p>
        </div>

    </div>

    <header class="bg-white shadow-md py-0 px-3 md:px-12 sticky top-0 z-50">

        <div class="max-w-9xl mx-auto flex items-center justify-between">

            <img class="h-20 w-auto object-contain flex-shrink-0" src="{{ asset('images/logo/brand.png') }}"
                alt="لوگو فروشگاه">

            <nav class="hidden md:flex items-center space-x-8 w-100 justify-between">
                <a href="{{ route('index') }}" class="text-gray-600 hover:text-blue-600 transition font-medium">
                    صفحه اصلی
                </a>
                <a href="{{ route('products') }}" class="text-gray-600 hover:text-blue-600 transition font-medium">
                    محصولات
                </a>
                <a href="{{ route('articles') }}" class="text-gray-600 hover:text-blue-600 transition font-medium">
                    مقالات
                </a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 transition font-medium">
                    درباره ما
                </a>
            </nav>

            <div
                class="flex items-center border-2 border-gray-300 rounded-lg bg-gray-100  h-10 max-w-xs md:max-w-sm lg:max-w-md focus-within:border-blue-500 transition-all duration-200">
                <img class="w-5 h-5 object-contain opacity-60" src="{{ asset('images/icons/search.png') }}"
                    alt="">
                <input class="w-full bg-transparent py-2 px-3 text-sm text-gray-700 outline-none placeholder-gray-400"
                    type="text" placeholder="جستجو برای محصولات...">
            </div>

            <div class="flex items-center space-x-4 space-x-reverse">
                <a href="#" class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-700 transition">
                    ورود / ثبت‌نام
                </a>

            </div>
        </div>

    </header>
