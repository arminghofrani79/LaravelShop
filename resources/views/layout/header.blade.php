<!DOCTYPE html>
<html lang="en" dir="rtl">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/logo.webp') }}">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<title>@yield('title', 'LaravelShop')</title>
</head>

<body class="bg-[#F5F6F7] pb-20 md:pb-0">

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

    <div class="sticky relative top-0 z-50 h-20 border-y border-[#393E46]/15 bg-[#EEEEEE] shadow-sm">
        <div class="mx-auto flex max-w-[1500px] items-center gap-3 px-4 h-full sm:gap-5 lg:px-8">
            <div class="flex shrink-0 items-center gap-1 sm:gap-2">
                <a href="{{ route('index') }}" aria-label="صفحه اصلی Laravel Shop">
                    <img class="h-12 w-32 object-contain sm:h-16 sm:w-44" src="{{ asset('images/logo/brand.webp') }}"
                        alt="لوگو فروشگاه Laravel Shop">
                </a>
                <button id="mobileMenuButton" type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-lg text-[#222831] transition hover:bg-[#393E46]/10 md:hidden"
                    aria-label="باز کردن منو" aria-expanded="false" aria-controls="mobileMenu">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

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

        {{-- Mobile menu --}}
        <div id="mobileMenu"
            class="invisible absolute inset-x-3 top-[calc(100%+8px)] z-[210] max-h-[calc(100vh-100px)] translate-y-2 overflow-y-auto rounded-2xl border border-[#393E46]/10 bg-white p-3 opacity-0 shadow-xl transition-all duration-200 md:hidden">
            <nav class="flex flex-col gap-1" aria-label="منوی موبایل">
                <a href="{{ route('products') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-[#222831] transition hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]">
                    محصولات
                </a>

                <div class="border-y border-[#393E46]/10 py-1">
                    <button id="mobileCategoryButton" type="button"
                        class="flex w-full items-center justify-between rounded-xl px-4 py-3 text-right text-sm font-medium text-[#222831] transition hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]"
                        aria-expanded="false" aria-controls="mobileCategoryList">
                        دسته‌بندی کالاها
                        <svg id="mobileCategoryChevron" class="h-4 w-4 transition-transform duration-200" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="mobileCategoryList" class="hidden space-y-1 px-2 pb-1">
                        @foreach ($categories as $category)
                            <a href="{{ route('products', ['category' => $category->id]) }}"
                                class="block rounded-xl px-4 py-2.5 text-sm text-[#393E46] transition hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('contact') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-[#222831] transition hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]">
                    درباره ما
                </a>
                <a href="{{ route('cart') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-[#222831] transition hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]">
                    سبد خرید
                </a>

                @auth
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit"
                            class="w-full rounded-xl px-4 py-3 text-right text-sm font-medium text-red-600 transition hover:bg-red-50">
                            خروج از حساب
                        </button>
                    </form>
                @endauth
            </nav>
        </div>
    </div>

    <div class="relative z-[100] hidden border-b border-[#393E46]/15 md:block">
        <div class="mx-auto flex max-w-[1700px] items-center justify-between gap-4 overflow-x-visible px-2 sm:px-4 lg:px-8">
            <nav class="flex w-full flex-wrap items-center justify-center gap-1 py-2 text-sm font-medium text-[#393E46] sm:min-w-max sm:flex-nowrap sm:justify-start sm:gap-8 sm:py-3">
                <div id="categoryMenuWrapper" class="relative z-[70] w-full sm:w-auto">


                    {{-- دکمه دسته‌بندی --}}
                    <button id="categoryMenuButton" type="button"
                        class="flex w-full items-center justify-center gap-2 rounded-lg px-3 py-2.5 text-sm text-[#222831] transition hover:bg-[#EEEEEE] hover:text-[#00ADB5] sm:w-auto sm:px-4 sm:py-3">

                        دسته‌بندی کالاها

                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>


                    {{-- Dropdown --}}
                    <div id="categoryDropdown"
                        class="invisible absolute right-0 top-full z-[80]
               translate-y-2 rounded-xl border border-[#393E46]/10
               w-full bg-[#EEEEEE] p-2 opacity-0 shadow-xl sm:w-64
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
                    class="flex flex-1 items-center justify-center gap-1 rounded-lg px-2 py-2 text-xs text-[#393E46] transition hover:bg-[#EEEEEE] hover:text-[#00ADB5] sm:flex-none sm:px-0 sm:py-0 sm:text-sm">
                    <img src="{{ asset('images/icons/address.webp') }}" alt="s" class="w-3 h-3">
                    صفحه اصلی
                </a>
                <a href="{{ route('products') }}"
                    class="flex flex-1 items-center justify-center gap-1 rounded-lg px-2 py-2 text-xs text-[#393E46] transition hover:bg-[#EEEEEE] hover:text-[#00ADB5] sm:flex-none sm:px-0 sm:py-0 sm:text-sm">
                    <img src="{{ asset('images/icons/buy.webp') }}" alt="s" class="w-3 h-3">
                    محصولات
                </a>
                <a href="{{ route('articles') }}"
                    class="flex flex-1 items-center justify-center gap-1 rounded-lg px-2 py-2 text-xs text-[#393E46] transition hover:bg-[#EEEEEE] hover:text-[#00ADB5] sm:flex-none sm:px-0 sm:py-0 sm:text-sm">
                    <img src="{{ asset('images/icons/star.webp') }}" alt="s" class="w-3 h-3">
                    مقالات
                </a>
                <a href="{{ route('contact') }}"
                    class="flex flex-1 items-center justify-center gap-1 rounded-lg px-2 py-2 text-xs text-[#393E46] transition hover:bg-[#EEEEEE] hover:text-[#00ADB5] sm:flex-none sm:px-0 sm:py-0 sm:text-sm">
                    <img src="{{ asset('images/icons/phone.webp') }}" alt="s" class="w-3 h-3">
                    درباره ما
                </a>
            </nav>
        </div>
    </div>

    {{-- Mobile bottom navigation --}}
    <nav class="fixed inset-x-0 bottom-0 z-[200] grid h-[72px] grid-cols-4 border-t border-[#393E46]/15 bg-white/95 px-2 pb-safe shadow-[0_-4px_18px_rgba(34,40,49,0.10)] backdrop-blur-md md:hidden"
        aria-label="ناوبری موبایل">
        <a href="{{ route('index') }}"
            class="flex flex-col items-center justify-center gap-1 text-xs transition {{ request()->routeIs('index') ? 'text-[#00ADB5]' : 'text-[#393E46]/70 hover:text-[#00ADB5]' }}">
            <img src="{{ asset('images/icons/address.webp') }}" alt="" class="h-6 w-6 object-contain">
            <span>خانه</span>
        </a>
        <a href="{{ route('products') }}"
            class="flex flex-col items-center justify-center gap-1 text-xs transition {{ request()->routeIs('products', 'product-show') ? 'text-[#00ADB5]' : 'text-[#393E46]/70 hover:text-[#00ADB5]' }}">
            <img src="{{ asset('images/icons/buy.webp') }}" alt="" class="h-6 w-6 object-contain">
            <span>محصولات</span>
        </a>
        <a href="{{ route('articles') }}"
            class="flex flex-col items-center justify-center gap-1 text-xs transition {{ request()->routeIs('articles', 'article-show') ? 'text-[#00ADB5]' : 'text-[#393E46]/70 hover:text-[#00ADB5]' }}">
            <img src="{{ asset('images/icons/star.webp') }}" alt="" class="h-6 w-6 object-contain">
            <span>مقالات</span>
        </a>
        <a href="{{ auth()->check() ? route('user-profile') : route('show-login') }}"
            class="flex flex-col items-center justify-center gap-1 text-xs transition {{ request()->routeIs('user-*') ? 'text-[#00ADB5]' : 'text-[#393E46]/70 hover:text-[#00ADB5]' }}">
            <img src="{{ asset('images/icons/profile2.webp') }}" alt="" class="h-6 w-6 object-contain">
            <span>پروفایل</span>
        </a>
    </nav>
