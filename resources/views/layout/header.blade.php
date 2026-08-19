<!DOCTYPE html>
<html lang="en" dir="rtl">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<title>@yield('title', 'LaravelShop')</title>
</head>

<body class="bg-gray-50">

    <div class="benefits-bar flex w-full items-center justify-start gap-4 overflow-x-auto bg-gray-300 px-4 py-3 sm:justify-between sm:gap-6"
        aria-label="مزایای خرید از فروشگاه">

        <div class="benefit-item flex shrink-0 items-center gap-2" data-benefit-index="0">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/garanti.webp') }}" alt="تضمین اصالت">
            <p class="text-sm text-gray-700 font-medium">تضمین اصالت کالا</p>
        </div>

        <div class="benefit-item flex shrink-0 items-center gap-2" data-benefit-index="1">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/send.webp') }}" alt="ارسال رایگان">
            <p class="text-sm text-gray-700 font-medium">ارسال رایگان برای سفارشات بالای ۲۰ میلیون تومان</p>
        </div>

        <div class="benefit-item flex shrink-0 items-center gap-2" data-benefit-index="2">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/support.webp') }}" alt="پشتیبانی ۲۴ ساعته">
            <p class="text-sm text-gray-700 font-medium">پشتیبانی ۲۴ ساعته</p>
        </div>

    </div>

    <header class="sticky top-0 z-50 border-b border-gray-100 bg-white shadow-sm">
        <div class="mx-auto flex max-w-[1500px] items-center gap-3 px-4 py-4 sm:gap-5 lg:px-8">
            <a href="{{ route('index') }}" class="shrink-0" aria-label="صفحه اصلی Laravel Shop">
                <img class="h-12 w-32 object-contain sm:h-16 sm:w-44" src="{{ asset('images/logo/brand.webp') }}"
                    alt="لوگو فروشگاه Laravel Shop">
            </a>

            <form action="{{ route('products') }}" method="GET"
                class="order-3 flex h-12 min-w-0 flex-1 items-center rounded-full bg-gray-100 px-4 transition focus-within:ring-2 focus-within:ring-blue-200 sm:order-none sm:h-14 sm:px-5">
                <button type="submit" class="shrink-0 cursor-pointer" aria-label="جستجو">
                    <img class="h-5 w-5 object-contain opacity-60 sm:h-6 sm:w-6"
                        src="{{ asset('images/icons/search.webp') }}" alt="">
                </button>
                <input
                    class="w-full bg-transparent px-3 text-sm text-gray-700 outline-none placeholder:text-gray-400 sm:text-base"
                    name="search" type="text" placeholder="جستجو در Laravel Shop..."
                    value="{{ request('search') }}">
            </form>

            <div class="flex shrink-0 items-center gap-2 sm:gap-3">
                @auth
                    @if (Auth::user()->is_admin)
                        <a href="{{ route('adminindex') }}"
                            class="hidden items-center gap-2 rounded-lg px-2 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100 sm:flex"
                            title="پنل مدیریت">
                            <img src="{{ asset('images/icons/admin.webp') }}" alt="ادمین" class="h-5 w-5">
                            <span>مدیریت</span>
                        </a>
                    @endif
                    <a href="{{ route('user-profile') }}"
                        class="hidden items-center gap-2 rounded-lg px-2 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100 sm:flex">
                        <img class="h-5 w-5" src="{{ asset('images/icons/profile2.webp') }}" alt="پروفایل">
                        <span>پروفایل</span>
                    </a>
                    <a href="{{ route('cart') }}" class="relative rounded-lg p-2 transition hover:bg-gray-100"
                        title="سبد خرید">
                        <img class="h-6 w-6" src="{{ asset('images/icons/buy.webp') }}" alt="سبد خرید">
                    </a>
                    <div class="rounded-lg transition hover:bg-gray-100">
                        <form action="{{ route('logout') }}" method="POST" class="m-0 p-0">
                            @csrf
                            <button type="submit" class="flex h-10 w-10 items-center justify-center" title="خروج">
                                <img class="h-5 w-5" src="{{ asset('images/icons/exit.webp') }}" alt="خروج">
                            </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('show-login') }}"
                        class="flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:border-blue-500 hover:text-blue-600 sm:px-5 sm:py-3">
                        <img class="h-5 w-5" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                        <span>ورود | ثبت‌نام</span>
                    </a>
                @endguest
            </div>
        </div>

        <div class="border-t border-gray-100">
            <div class="mx-auto flex max-w-[1700px] items-center justify-between gap-4 overflow-x-auto px-4 lg:px-8">
                <nav class="flex min-w-max items-center gap-8 py-3 text-sm font-medium text-gray-600 sm:gap-8">
                    <a href="{{ route('products') }}"
                        class="flex items-center gap-2 whitespace-nowrap text-gray-800 transition hover:text-blue-600">

                        دسته‌بندی کالاها
                    </a>
                    <a href="{{ route('index') }}"
                        class="flex justify-center items-center text-gray-600 hover:text-blue-600 transition font-medium">
                        <img src="{{ asset('images/icons/address.webp') }}" alt="s" class="w-3 h-3">
                        صفحه اصلی
                    </a>
                    <a href="{{ route('products') }}"
                        class="flex justify-center items-center text-gray-600 hover:text-blue-600 transition font-medium">
                        <img src="{{ asset('images/icons/buy.webp') }}" alt="s" class="w-3 h-3">
                        محصولات
                    </a>
                    <a href="{{ route('articles') }}"
                        class="flex justify-center items-center text-gray-600 hover:text-blue-600 transition font-medium">
                        <img src="{{ asset('images/icons/star.webp') }}" alt="s" class="w-3 h-3">
                        مقالات
                    </a>
                    <a href="{{ route('contact') }}"
                        class="flex justify-center items-center text-gray-600 hover:text-blue-600 transition font-medium">
                        <img src="{{ asset('images/icons/phone.webp') }}" alt="s" class="w-3 h-3">
                        درباره ما
                    </a>
                </nav>
            </div>
        </div>
    </header>
