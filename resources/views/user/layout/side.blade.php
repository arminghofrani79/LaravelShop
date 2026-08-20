@include('layout.header')

{{-- header --}}
<header
    class="relative flex min-h-[140px] w-full items-center overflow-hidden bg-cover bg-left bg-no-repeat px-4 sm:min-h-[150px] md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundprofile.webp') }}');">
    <div class="absolute inset-0 bg-gradient-to-l from-[#F5F6F7] via-[#F5F6F8] to-transparent"></div>
    <div class="relative z-10 mx-auto m-5 flex w-full max-w-7xl items-center justify-start rounded-2xl border-2 border-white p-5">
        <div class="max-w-xl text-right">
            <div class="mb-2 flex items-center gap-2">
                <span class="h-2 w-2 rounded-full bg-[#00ADB5]"></span>
                <span class="text-xs font-medium text-[#00ADB5] sm:text-sm">فروشگاه LaravelShop</span>
            </div>
            <h1 class="text-2xl font-bold text-[#222831] sm:text-3xl">پروفایل کاربری</h1>
            <div class="mt-2 ml-auto mr-0 h-[2px] w-16 rounded-full bg-[#00ADB5]"></div>
            <p class="mt-3 hidden max-w-md text-xs leading-7 text-[#393E46] sm:block md:text-base">
                اطلاعات حساب، سفارش‌ها و آدرس‌های خود را مدیریت کنید.
            </p>
        </div>
    </div>
</header>

<main class="mx-auto max-w-[1500px] px-4 py-8 sm:px-6 sm:py-10 lg:px-8">

    <!-- maingrid -->
    <div class="grid grid-cols-1 items-start gap-6 lg:grid-cols-5 lg:gap-8">

        <!-- right col -->
        <div class="flex w-full flex-col gap-5 rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm lg:col-span-1 lg:p-6">

            <!-- profile -->
            <div class="flex shrink-0 items-center gap-3 border-b border-gray-100 pb-4 lg:flex-col lg:border-b lg:border-l-0 lg:pb-4 lg:pl-0">
                <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center overflow-hidden mb-3">
                    <img src="{{ asset('images/icons/profile.webp') }}" alt="کاربر" class="w-full h-full object-cover">
                </div>
                <div class="lg:text-center">
                    <h3 class="text-lg font-bold text-gray-800">{{ Auth::user()->name }}</h3>
                    <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- meno links -->
            <button id="mobileProfileMenuButton" type="button"
                class="flex w-full items-center justify-between rounded-xl bg-[#00ADB5]/10 px-4 py-3 text-sm font-bold text-[#222831] md:hidden"
                aria-expanded="false" aria-controls="profileMenuLinks">
                منوی حساب کاربری
                <svg id="mobileProfileMenuChevron" class="h-4 w-4 transition-transform duration-200" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <nav id="profileMenuLinks" class="hidden flex-wrap gap-2 md:flex lg:flex-col lg:mt-2" aria-label="منوی حساب کاربری">
                <a href="{{ route('user-profile') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('user-profile', 'user-edit-profile') ? 'bg-[#00ADB5] text-white' : 'text-[#393E46] hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                    <span>اطلاعات حساب</span>
                </a>
                <a href="{{ route('user-order') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('user-order', 'user-watch-order') ? 'bg-[#00ADB5] text-white' : 'text-[#393E46] hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/buy.webp') }}" alt="">
                    <span>سفارش‌های من</span>
                </a>
                <a href="{{ route('user-address') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('user-address', 'user-create-address', 'user-edit-address') ? 'bg-[#00ADB5] text-white' : 'text-[#393E46] hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/address.webp') }}" alt="">
                    <span>آدرس‌ها</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('adminindex') ? 'bg-[#00ADB5] text-white' : 'text-[#393E46] hover:bg-[#00ADB5]/10 hover:text-[#00ADB5]' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/love.webp') }}" alt="">
                    <span>علاقه‌مندی‌ها</span>
                </a>
                <div class="border-t border-gray-200 my-1 pt-2"></div>
                <form action="{{ route('logout') }}" method="POST"
                    class="flex items-center justify-center mx-5.5 gap-3 p-3 bg-red-900 text-white hover:bg-red-500 rounded-lg text-sm transition">
                    @csrf
                    <button type="submit" class="flex items-center justify-center gap-3 w-full h-full">
                        <img class="w-4 h-4" src="{{ asset('images/icons/exit.webp') }}" alt="">
                        <span>خروج</span>
                </form>
            </nav>
        </div>
