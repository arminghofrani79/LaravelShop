@include('layout.header')

{{-- header --}}
<header
    class="relative flex min-h-[140px] w-full items-center overflow-hidden bg-cover bg-left bg-no-repeat px-4 sm:min-h-[150px] md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundadmin.webp') }}');">
    <div class="absolute inset-0 bg-gradient-to-l from-[#F5F6F7] via-[#F5F6F8] to-transparent"></div>
    <div class="relative z-10 mx-auto m-5 flex w-full max-w-7xl items-center justify-start rounded-2xl border-2 border-white p-5">
        <div class="max-w-xl text-right">
            <div class="mb-2 flex items-center gap-2">
                <span class="h-2 w-2 rounded-full bg-[#00ADB5]"></span>
                <span class="text-xs font-medium text-[#00ADB5] sm:text-sm">فروشگاه LaravelShop</span>
            </div>
            <h1 class="text-2xl font-bold text-[#222831] sm:text-3xl">پنل ادمین</h1>
            <div class="mt-2 ml-auto mr-0 h-[2px] w-16 rounded-full bg-[#00ADB5]"></div>
            <p class="mt-3 hidden max-w-md text-xs leading-7 text-[#393E46] sm:block md:text-base">
                مدیریت محصولات، سفارش‌ها و اطلاعات فروشگاه در یک نگاه.
            </p>
        </div>
    </div>
</header>

<main class="container mx-auto max-w-7xl px-4 py-8">


    <!-- maingrid -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-start">

        <!-- right col (Sidebar) -->
        <div class="lg:col-span-1 bg-white rounded-xl shadow-sm p-6 flex flex-col gap-4">

            <!-- meno links -->
            <nav class="flex flex-col gap-2 mt-2">
                <a href="{{ route('adminindex') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('adminindex') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/address.webp') }}" alt="">
                    <span>داشبورد</span>
                </a>
                <a href="{{ route('adminproducts') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('adminproducts', 'admin-create-product', 'admin-edit-product') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/send.webp') }}" alt="">
                    <span>محصولات</span>
                </a>
                <a href="{{ route('admincategories') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('admincategories', 'admin-edit-category', 'admin-create-category') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4
                    h-4" src="{{ asset('images/icons/order.webp') }}" alt="">
                    <span>دسته بندی ها</span>
                </a>
                <a href="{{ route('adminorders') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('adminorders', 'admin-watch-order') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4
                    h-4" src="{{ asset('images/icons/buy.webp') }}" alt="">
                    <span>سفارش ها</span>
                </a>
                <a href="{{ route('adminarticles') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('adminarticles', 'admin-create-article', 'admin-edit-article') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4
                    h-4" src="{{ asset('images/icons/star2.webp') }}"
                        alt="">
                    <span>مقالات</span>
                </a>
                <a href="{{ route('adminusers') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition
                    {{ request()->routeIs('adminusers', 'admin-create-user', 'admin-watch-user') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4
                    h-4" src="{{ asset('images/icons/support.webp') }}"
                        alt="">
                    <span>کاربران</span>
                </a>
                <div class="border-t border-gray-200 my-1 pt-2"></div>
                <a href="#"
                    class="flex items-center justify-center w-full gap-3 p-3 bg-red-900 text-white hover:bg-red-50 hover:text-red-900 rounded-lg text-sm transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/exit.webp') }}" alt="">
                    <span>خروج</span>
                </a>
            </nav>
        </div>
