@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundadmin.webp') }}');">
    <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">پنل ادمین</h1>
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
