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
                    class="flex items-center gap-3 p-3 bg-gray-600 text-white rounded-lg text-sm font-medium transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                    <span>اطلاعات حساب</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg text-sm transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/buy.png') }}" alt="">
                    <span>سفارش‌های من</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg text-sm transition">
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

        <!-- left col -->
        <div class="lg:col-span-3 flex flex-col gap-6">

            <!-- profile informatin -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center gap-2 text-lg font-bold text-gray-800 mb-6 border-b border-gray-100 pb-4">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                    <span>اطلاعات حساب</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-500">نام</label>
                        <input readonly type="text" placeholder="محمد"
                            class="font-medium text-gray-800 text-sm bg-gray-50 p-2 rounded outline-0">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-500">نام خانوادگی</label>
                        <input readonly type="text" placeholder="محمدی"
                            class="font-medium text-gray-800 text-sm bg-gray-50 p-2 rounded outline-0">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-500">موبایل</label>
                        <input readonly type="text" placeholder="09146911909"
                            class="font-medium text-gray-800 text-sm bg-gray-50 p-2 rounded outline-0">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-500">ایمیل</label>
                        <input readonly type="text" placeholder="m0hamadi@ifo.com"
                            class="font-medium text-gray-800 text-sm bg-gray-50 p-2 rounded outline-0">
                    </div>
                </div>
                <div class="mt-6">
                    <button
                        class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2.5 rounded-lg text-sm flex items-center gap-2 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        ویرایش اطلاعات
                    </button>
                </div>
            </div>

            <!-- cards -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500">تعداد سفارش‌ها</span>
                        <span class="text-lg font-bold text-gray-800 mt-1">12</span>
                    </div>
                    <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500">سفارش‌های در انتظار</span>
                        <span class="text-lg font-bold text-gray-800 mt-1">2</span>
                    </div>
                    <div class="w-10 h-10 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500">علاقه‌مندی‌ها</span>
                        <span class="text-lg font-bold text-gray-800 mt-1">8</span>
                    </div>
                    <div class="w-10 h-10 bg-red-100 text-red-500 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500">آدرس‌های ذخیره شده</span>
                        <span class="text-lg font-bold text-gray-800 mt-1">3</span>
                    </div>
                    <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!--lastorders & address -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- lastorders -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-3 mb-4">
                        <h4 class="font-bold text-gray-800 flex items-center gap-2">
                            <img src="{{ 'images/icons/buy.png' }}" alt="کاربر"class="w-6 h-6 object-cover">
                            آخرین سفارش‌ها
                        </h4>
                        <a href="#" class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                            <span>مشاهده همه سفارش‌ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex justify-between items-center border-b border-gray-50 pb-2 text-sm">
                            <div class="flex flex-col gap-0.5">
                                <span class="text-gray-800 font-medium">#LS-10045</span>
                                <span class="text-xs text-gray-400">۱۴۰۳/۰۲/۲۵</span>
                            </div>
                            <div class="flex flex-col items-end gap-0.5">
                                <span class="text-gray-800 font-medium">۱,۲۸۰,۰۰۰ تومان</span>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded-full">تحویل
                                    شده</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-50 pb-2 text-sm">
                            <div class="flex flex-col gap-0.5">
                                <span class="text-gray-800 font-medium">#LS-10032</span>
                                <span class="text-xs text-gray-400">۱۴۰۳/۰۲/۱۵</span>
                            </div>
                            <div class="flex flex-col items-end gap-0.5">
                                <span class="text-gray-800 font-medium">۲,۵۶۰,۰۰۰ تومان</span>
                                <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">پرداخت
                                    شده</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <div class="flex flex-col gap-0.5">
                                <span class="text-gray-800 font-medium">#LS-10021</span>
                                <span class="text-xs text-gray-400">۱۴۰۳/۰۲/۱۰</span>
                            </div>
                            <div class="flex flex-col items-end gap-0.5">
                                <span class="text-gray-800 font-medium">۹۸۰,۰۰۰ تومان</span>
                                <span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded-full">در انتظار
                                    پرداخت</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- last address -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center gap-2 border-b border-gray-100 pb-3 mb-4">
                        <img src="{{ 'images/icons/address.png' }}" alt="کاربر"class="w-6 h-6 object-cover">
                        <h4 class="font-bold text-gray-800">آدرس پیش‌فرض</h4>
                    </div>

                    <div class="text-sm text-gray-600 space-y-2">
                        <p>تهران، خیابان ولیعصر، بالاتر از میدان ونک، خیابان شهید برادران مظفر، پلاک ۳۴، واحد ۵</p>
                        <div class="pt-2 text-xs text-gray-500 space-y-1">
                            <p><span class="font-medium">کد پستی:</span> ۱۹۶۸۳۴۵۶۷</p>
                            <p><span class="font-medium">تلفن:</span> ۰۹۱۲ ۳۴۵ ۶۷۸۹</p>
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <button
                            class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-lg text-sm flex items-center gap-2 transition w-full justify-center">
                            <img src="{{ 'images/icons/edit.png' }}" alt="کاربر"class="w-6 h-6 object-cover">
                            ویرایش آدرس
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>

</main>

@include('layout.footer')
