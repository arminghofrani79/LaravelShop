<!DOCTYPE html>
<html lang="en" dir="rtl">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/logo.webp') }}">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<title>@yield('title', 'LaravelShop')</title>
</head>

<body class="bg-[#EEEEEE]">

    <div class="benefits-bar flex w-full items-center justify-start gap-4 overflow-x-auto bg-[#222831] px-4 py-3 text-[#EEEEEE] sm:justify-between sm:gap-6"
        aria-label="مزایای خرید از فروشگاه">

        <div class="benefit-item flex shrink-0 items-center gap-2" data-benefit-index="0">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/garanti.webp') }}" alt="تضمین اصالت">
            <p class="text-sm font-medium text-[#EEEEEE]">تضمین اصالت کالا</p>
        </div>

        <div class="benefit-item flex shrink-0 items-center gap-2" data-benefit-index="1">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/send.webp') }}" alt="ارسال رایگان">
            <p class="text-sm font-medium text-[#EEEEEE]">ارسال رایگان برای سفارشات بالای ۲۰ میلیون تومان</p>
        </div>

        <div class="benefit-item flex shrink-0 items-center gap-2" data-benefit-index="2">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/support.webp') }}" alt="پشتیبانی ۲۴ ساعته">
            <p class="text-sm font-medium text-[#EEEEEE]">پشتیبانی ۲۴ ساعته</p>
        </div>

    </div>

    <div class="sticky h-25 top-0 z-50 border-y border-[#393E46]/15 bg-[#EEEEEE] shadow-sm">
        <div class="mx-auto flex max-w-[1500px] items-center gap-3 px-4 py-4 sm:gap-5 lg:px-8">
            <a href="{{ route('index') }}" class="shrink-0" aria-label="صفحه اصلی Laravel Shop">
                <img class="h-12 w-32 object-contain sm:h-16 sm:w-44" src="{{ asset('images/logo/brand.webp') }}"
                    alt="لوگو فروشگاه Laravel Shop">
            </a>

            <form action="{{ route('products') }}" method="GET"
                class="order-3 flex h-12 min-w-0 flex-1 items-center rounded-full bg-[#EEEEEE] px-4 transition focus-within:ring-2 focus-within:ring-[#00ADB5]/30 sm:order-none sm:h-14 sm:px-5">
                <button type="submit" class="shrink-0 cursor-pointer" aria-label="جستجو">
                    <img class="h-5 w-5 object-contain opacity-60 sm:h-6 sm:w-6"
                        src="{{ asset('images/icons/search.webp') }}" alt="">
                </button>
                <input
                    class="w-full bg-transparent px-3 text-sm text-[#222831] outline-none placeholder:text-[#393E46]/70 sm:text-base"
                    name="search" type="text" placeholder="جستجو در Laravel Shop..."
                    value="{{ request('search') }}">
            </form>

            <div class="flex shrink-0 items-center gap-2 sm:gap-3">
                @auth
                    @if (Auth::user()->is_admin)
                        <a href="{{ route('adminindex') }}"
                            class="hidden items-center gap-2 rounded-lg px-2 py-2 text-sm font-medium text-[#222831] transition hover:bg-[#393E46]/10 sm:flex"
                            title="پنل مدیریت">
                            <img src="{{ asset('images/icons/admin.webp') }}" alt="ادمین" class="h-5 w-5">
                            <span>مدیریت</span>
                        </a>
                    @endif
                    <a href="{{ route('user-profile') }}"
                        class="hidden items-center gap-2 rounded-lg px-2 py-2 text-sm font-medium text-[#222831] transition hover:bg-[#393E46]/10 sm:flex">
                        <img class="h-5 w-5" src="{{ asset('images/icons/profile2.webp') }}" alt="پروفایل">
                        <span>پروفایل</span>
                    </a>
                    <a href="{{ route('cart') }}" class="relative rounded-lg p-2 transition hover:bg-[#393E46]/10"
                        title="سبد خرید">
                        <img class="h-6 w-6" src="{{ asset('images/icons/buy.webp') }}" alt="سبد خرید">
                    </a>
                    <div class="rounded-lg transition hover:bg-[#393E46]/10">
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
                        class="flex items-center gap-2 rounded-lg border border-[#393E46]/20 px-3 py-2 text-sm font-semibold text-[#222831] transition hover:border-[#00ADB5] hover:text-[#00ADB5] sm:px-5 sm:py-3">
                        <img class="h-5 w-5" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                        <span>ورود | ثبت‌نام</span>
                    </a>
                @endguest
            </div>
        </div>
    </div>

    <div class="relative z-[100] border-b border-[#393E46]/15">
        <div class="mx-auto flex max-w-[1700px] items-center justify-between gap-4 overflow-x-visible px-4 lg:px-8">
            <nav class="flex min-w-max items-center gap-8 py-3 text-sm font-medium text-[#393E46] sm:gap-8">
                <div id="categoryMenuWrapper" class="relative z-[70]">


                    {{-- دکمه دسته‌بندی --}}
                    <button id="categoryMenuButton" type="button"
                        class="flex items-center gap-2 rounded-lg px-4 py-3 text-[#222831] transition hover:bg-[#EEEEEE] hover:text-[#00ADB5]">

                        دسته‌بندی کالاها

                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>


                    {{-- Dropdown --}}
                    <div id="categoryDropdown"
                        class="invisible absolute right-0 top-full z-[80] w-64
               translate-y-2 rounded-xl border border-[#393E46]/10
               bg-[#EEEEEE] p-2 opacity-0 shadow-xl
               transition-all duration-200">

                        <div class="flex flex-col">

                            @foreach ($categories as $category)
                                <a href="{{ route('products', ['category' => $category->id]) }}"
                                    class="rounded-lg px-4 py-3 text-sm font-medium
                           text-[#222831] transition
                           hover:bg-[#00ADB5] hover:text-[#EEEEEE]">

                                    {{ $category->name }}

                                </a>
                            @endforeach

                        </div>

                    </div>

                </div>


                <a href="{{ route('index') }}"
                    class="flex justify-center items-center text-[#393E46] hover:text-[#00ADB5] transition font-medium">
                    <img src="{{ asset('images/icons/address.webp') }}" alt="s" class="w-3 h-3">
                    صفحه اصلی
                </a>
                <a href="{{ route('products') }}"
                    class="flex justify-center items-center text-[#393E46] hover:text-[#00ADB5] transition font-medium">
                    <img src="{{ asset('images/icons/buy.webp') }}" alt="s" class="w-3 h-3">
                    محصولات
                </a>
                <a href="{{ route('articles') }}"
                    class="flex justify-center items-center text-[#393E46] hover:text-[#00ADB5] transition font-medium">
                    <img src="{{ asset('images/icons/star.webp') }}" alt="s" class="w-3 h-3">
                    مقالات
                </a>
                <a href="{{ route('contact') }}"
                    class="flex justify-center items-center text-[#393E46] hover:text-[#00ADB5] transition font-medium">
                    <img src="{{ asset('images/icons/phone.webp') }}" alt="s" class="w-3 h-3">
                    درباره ما
                </a>
            </nav>
        </div>
    </div>
