@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundprofile.png') }}');">
    <h1 class="fon-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">پروفایل کاربری</h1>
</header>

<main class="container mx-auto max-w-7xl px-4 py-8">

    <!-- maingrid -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-start">

        <!-- right col -->
        <div class="lg:col-span-1 bg-white rounded-xl shadow-sm p-6 flex flex-col gap-4">

            <!-- profile -->
            <div class="flex flex-col items-center border-b border-gray-100 pb-4">
                <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center overflow-hidden mb-3">
                    <img src="{{ asset('images/icons/profile.png') }}" alt="کاربر" class="w-full h-full object-cover">
                </div>
                <h3 class="text-lg font-bold text-gray-800">{{ Auth::user()->name }}</h3>
                <p class="text-sm text-gray-500 text-center">{{ Auth::user()->email }}</p>
            </div>

            <!-- meno links -->
            <nav class="flex flex-col gap-2 mt-2">
                <a href="{{ route('user-profile') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('user-profile', 'user-edit-profile') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                    <span>اطلاعات حساب</span>
                </a>
                <a href="{{ route('user-order') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('user-order', 'user-watch-order') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/buy.png') }}" alt="">
                    <span>سفارش‌های من</span>
                </a>
                <a href="{{ route('user-address') }}"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('user-address', 'user-create-address', 'user-edit-address') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/address.png') }}" alt="">
                    <span>آدرس‌ها</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 p-3 rounded-lg text-sm font-medium transition 
                    {{ request()->routeIs('adminindex') ? 'bg-gray-600 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                    <img class="w-4 h-4" src="{{ asset('images/icons/love.png') }}" alt="">
                    <span>علاقه‌مندی‌ها</span>
                </a>
                <div class="border-t border-gray-200 my-1 pt-2"></div>
                <form action="{{ route('logout') }}" method="POST"
                    class="flex items-center justify-center mx-5.5 gap-3 p-3 bg-red-900 text-white hover:bg-red-500 rounded-lg text-sm transition">
                    @csrf
                    <button type="submit" class="flex items-center justify-center gap-3 w-full h-full">
                        <img class="w-4 h-4" src="{{ asset('images/icons/exit.png') }}" alt="">
                        <span>خروج</span>
                </form>
            </nav>
        </div>
