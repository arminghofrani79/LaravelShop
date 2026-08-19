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
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/garanti.webp') }}" alt="تضمین اصالت">
            <p class="text-sm text-gray-700 font-medium">تضمین اصالت کالا</p>
        </div>

        <div class="flex items-center gap-2">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/send.webp') }}" alt="ارسال رایگان">
            <p class="text-sm text-gray-700 font-medium">ارسال رایگان برای سفارشات بالای ۲۰ میلیون تومان</p>
        </div>

        <div class="flex items-center gap-2">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/support.webp') }}" alt="پشتیبانی ۲۴ ساعته">
            <p class="text-sm text-gray-700 font-medium">پشتیبانی ۲۴ ساعته</p>
        </div>

    </div>

    <header class="bg-white shadow-md py-0 px-3 md:px-12 sticky top-0 z-50">

        <div class="max-w-9xl mx-auto flex items-center justify-between">

            <img class="h-15 w-auto object-contain flex-shrink-0" src="{{ asset('images/logo/brand.webp') }}"
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

            <div>
                <form action="{{ route('products') }}" method="GET"
                    class="flex items-center border-2 border-gray-300 rounded-lg bg-gray-100  h-10 max-w-xs md:max-w-sm lg:max-w-md focus-within:border-blue-500 transition-all duration-200">
                    <button type="submit" class="cursor-pointer">
                        <img class="w-5 h-5 object-contain opacity-60" src="{{ asset('images/icons/search.webp') }}"
                            alt="">
                    </button>
                    <input
                        class="w-full bg-transparent py-2 px-3 text-sm text-gray-700 outline-none placeholder-gray-400"
                        name="search" type="text" placeholder="جستجو برای محصولات..."
                        value="{{ request('search') }}"">
                </form>
            </div>

            <div class="flex items-center gap-0.5">
                @auth
                    {{-- username --}}
                    <div>

                        <span class="text-sm text-gray-700 font-medium">سلام {{ Auth::user()->name }}!</span>
                    </div>
                    @if (Auth::user()->is_admin)
                        <a href="{{ route('adminindex') }}"
                            class="flex justify-center items-center text-white px-1
                            py-1 rounded-lg hover:bg-gray-700 transition cursor-pointer"
                            title="پنل مدیریت">
                            <img src="{{ asset('images/icons/admin.webp') }}" alt="ادمین" class="w-4 h-4">
                        </a>
                    @endif
                    {{-- profile button --}}
                    <a href="{{ route('user-profile') }}"
                        class="flex justify-center items-center text-white px-1 py-1 rounded-lg hover:bg-gray-700 transition cursor-pointer">
                        <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="پروفایل">
                    </a>
                    <a href="{{ route('cart') }}"
                        class="flex justify-center items-center text-white px-1 py-1 rounded-lg hover:bg-gray-700 transition cursor-pointer">
                        <img class="w-4 h-4" src="{{ asset('images/icons/buy.webp') }}" alt="سبد خرید">
                    </a>

                    {{-- exit button --}}
                    <div class="flex justify-center items-center rounded-lg hover:bg-gray-700 transition cursor-pointer">
                        <form action="{{ route('logout') }}" method="POST" class="m-0 p-0">
                            @csrf
                            <button type="submit" class="flex items-center justify-center px-1 py-1 w-full h-full">
                                <img class="w-4 h-4" src="{{ asset('images/icons/exit.webp') }}" alt="خروج">
                            </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('show-login') }}"
                        class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-700 transition cursor-pointer">
                        ورود / ثبت‌نام
                    </a>
                @endguest
            </div>
        </div>

    </header>
