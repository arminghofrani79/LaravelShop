@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundprofile.png') }}');">
    <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">پروفایل کاربری</h1>
</header>

<main class="container mx-auto max-w-7xl px-4 py-8">

    <!-- maingrid -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-start">

        <!-- right col -->
        <div class="lg:col-span-1 bg-white rounded-xl shadow-sm p-6 flex flex-col gap-4">

            <!-- profile -->
            <div class="flex flex-col items-center border-b border-gray-100 pb-4">
                <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center overflow-hidden mb-3">
                    <img src="{{ 'images/icons/profile.png' }}" alt="کاربر" class="w-full h-full object-cover">
                </div>
                <h3 class="text-lg font-bold text-gray-800">علی محمدی</h3>
                <p class="text-sm text-gray-500 text-center">ali.mohammadi@example.com</p>
            </div>

            <!-- meno links -->
            <nav class="flex flex-col gap-2 mt-2">
                <a href="#"
                    class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg text-sm transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                    <span>اطلاعات حساب</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg text-sm transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/buy.png') }}" alt="">
                    <span>سفارش‌های من</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 p-3 bg-gray-600 text-white rounded-lg text-sm font-medium transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/address.png') }}" alt="">
                    <span>آدرس‌ها</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg text-sm transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/love.png') }}" alt="">
                    <span>علاقه‌مندی‌ها</span>
                </a>
                <div class="border-t border-gray-200 my-1 pt-2"></div>
                <a href="#"
                    class="flex items-center justify-center mx-5.5 gap-3 p-3 bg-red-900 text-white hover:bg-red-50 rounded-lg text-sm transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/exit.png') }}" alt="">
                    <span>خروج</span>
                </a>
            </nav>
        </div>

        {{-- left col --}}
        <div class="lg:col-span-3 flex flex-col gap-6">

            <div class="flex justify-start">
                <button
                    class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-2.5 rounded-lg text-sm flex items-center gap-2 transition shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    افزودن آدرس جدید
                </button>
            </div>

            <!-- cards -->
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500">تعداد آدرس‌های من</span>
                        <span class="text-lg font-bold text-gray-800 mt-1">۳</span>
                    </div>
                    <div class="w-10 h-10 bg-gray-100 text-gray-600 rounded-full flex items-center justify-center">
                        <img class="w-4 h-4" src="{{ asset('images/icons/address.png') }}" alt="">
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500">تعداد آدرس‌های پیش‌فرض</span>
                        <span class="text-lg font-bold text-gray-800 mt-1">۱</span>
                    </div>
                    <div class="w-10 h-10 bg-gray-50 text-gray-500 rounded-full flex items-center justify-center">
                        <img class="w-4 h-4" src="{{ asset('images/icons/location.png') }}" alt="">
                    </div>
                </div>
            </div>

            <!-- address card -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                <!-- address1 -->
                <div class="bg-white rounded-xl shadow-sm p-5 flex flex-col gap-3">
                    <div class="relative flex justify-between items-start">
                        <h4 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                            <img class="w-4 h-4" src="{{ asset('images/icons/address.png') }}" alt="">
                            آدرس محل کار
                        </h4>
                        <span
                            class="absolute top-3 left-3 bg-green-100 text-green-700 px-2 py-0.5 rounded-md text-[10px] font-medium">پیش‌فرض</span>

                    </div>

                    <div class="space-y-2 text-sm">
                        <div class="flex items-center gap-2 text-gray-600 text-xs">
                            <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                            <span>علی محمدی</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-600 text-xs">
                            <img class="w-4 h-4" src="{{ asset('images/icons/phone.png') }}" alt="">
                            <span>0912 123 4567</span>
                        </div>
                        <div class="text-xs text-gray-600 leading-relaxed pt-1">
                            تهران، خیابان ولیعصر، پایین‌تر از میدان ونک، خیابان شهید برادران مظفر، پلاک ۲۱۰، طبقه ۳،
                            واحد ۱۲
                        </div>
                        <div class="flex items-center gap-2 text-gray-500 text-xs pt-1">
                            <img class="w-4 h-4" src="{{ asset('images/icons/order.png') }}" alt="">
                            <span>کد پستی: ۱۵۸۹۶۵۷۴۱۱</span>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-2 pt-3 border-t border-gray-100">
                        <button
                            class="flex-1 flex items-center justify-center gap-1 border border-gray-300 hover:bg-gray-50 text-gray-700 py-2 rounded-lg text-xs transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            ویرایش
                        </button>
                        <button
                            class="flex-1 flex items-center justify-center gap-1 border border-red-200 hover:bg-red-50 text-red-500 py-2 rounded-lg text-xs transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            حذف
                        </button>
                    </div>
                </div>

            </div>

        </div>


</main>


@include('layout.footer')
