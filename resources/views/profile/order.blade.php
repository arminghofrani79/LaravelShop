@include('profile.layout.side')

{{-- left col --}}
<div class="lg:col-span-3 flex flex-col gap-6">

    <!-- cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- all orders cards -->
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">کل سفارش‌ها</span>
                <span class="text-lg font-bold text-gray-800 mt-1">۱۲</span>
            </div>
            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
        </div>
        <!-- deliver cards -->
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">تحویل شده</span>
                <span class="text-lg font-bold text-gray-800 mt-1">۸</span>
            </div>
            <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <!-- in proccess cards -->
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">در حال پردازش</span>
                <span class="text-lg font-bold text-gray-800 mt-1">۴</span>
            </div>
            <div class="w-10 h-10 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <!-- canceled card -->
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">لغو شده</span>
                <span class="text-lg font-bold text-gray-800 mt-1">۳</span>
            </div>
            <div class="w-10 h-10 bg-red-100 text-red-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- orders table -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex flex-col gap-4">

            <!--  table header -->
            <div
                class="hidden md:grid grid-cols-12 gap-4 pb-4 border-b border-gray-100 text-sm text-gray-500 font-medium">
                <div class="col-span-2 text-center">سفارش</div>
                <div class="col-span-2 text-center">تاریخ</div>
                <div class="col-span-2 text-center">مبلغ</div>
                <div class="col-span-2 text-center">وضعیت پرداخت</div>
                <div class="col-span-2 text-center">وضعیت سفارش</div>
                <div class="col-span-2 text-center">عملیات</div>
            </div>

            <!-- row 1 -->
            <div
                class="grid grid-cols-2 md:grid-cols-12 gap-3 md:gap-4 py-4 border-b border-gray-50 items-center text-sm">
                <div class="col-span-2 flex flex-col md:items-center gap-0.5">
                    <span class="text-gray-800 font-medium">#LS-10045</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center text-gray-600 gap-0.5">
                    <span>۱۴۰۳/۰۳/۲۵</span>
                    <span class="text-xs text-gray-400">۱۴:۳۰</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="text-gray-800 font-medium">۱,۲۸۰,۰۰۰ تومان</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full text-xs">پرداخت
                        شده</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full text-xs">تحویل شده</span>
                </div>
                <div class="col-span-2 flex justify-start md:justify-center">
                    <a href="{{ route('user-watch-order') }}"
                        class="border border-blue-100 text-blue-600 hover:bg-blue-50 bg-blue-50/50 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1 transition">
                        <span>مشاهده جزئیات</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- row 2 -->
            <div
                class="grid grid-cols-2 md:grid-cols-12 gap-3 md:gap-4 py-4 border-b border-gray-50 items-center text-sm">
                <div class="col-span-2 flex flex-col md:items-center gap-0.5">
                    <span class="text-gray-800 font-medium">#LS-10032</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center text-gray-600 gap-0.5">
                    <span>۱۴۰۳/۰۳/۲۱</span>
                    <span class="text-xs text-gray-400">۱۰:۱۵</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="text-gray-800 font-medium">۷۸۶,۰۰۰ تومان</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full text-xs">پرداخت
                        شده</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-orange-100 text-orange-700 px-2 py-0.5 rounded-full text-xs">در حال
                        پردازش</span>
                </div>
                <div class="col-span-2 flex justify-start md:justify-center">
                    <button
                        class="border border-blue-100 text-blue-600 hover:bg-blue-50 bg-blue-50/50 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1 transition">
                        <span>مشاهده جزئیات</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- row 3 -->
            <div
                class="grid grid-cols-2 md:grid-cols-12 gap-3 md:gap-4 py-4 border-b border-gray-50 items-center text-sm">
                <div class="col-span-2 flex flex-col md:items-center gap-0.5">
                    <span class="text-gray-800 font-medium">#LS-10021</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center text-gray-600 gap-0.5">
                    <span>۱۴۰۳/۰۳/۱۸</span>
                    <span class="text-xs text-gray-400">۱۲:۴۵</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="text-gray-800 font-medium">۵۴۶,۰۰۰ تومان</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full text-xs">پرداخت
                        شده</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full text-xs">ارسال شده</span>
                </div>
                <div class="col-span-2 flex justify-start md:justify-center">
                    <a href="{{ route('user-watch-order') }}"
                        class="border border-blue-100 text-blue-600 hover:bg-blue-50 bg-blue-50/50 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1 transition">
                        <span>مشاهده جزئیات</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- row 4 -->
            <div class="grid grid-cols-2 md:grid-cols-12 gap-3 md:gap-4 py-4 items-center text-sm">
                <div class="col-span-2 flex flex-col md:items-center gap-0.5">
                    <span class="text-gray-800 font-medium">#LS-10002</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center text-gray-600 gap-0.5">
                    <span>۱۴۰۳/۰۳/۱۵</span>
                    <span class="text-xs text-gray-400">۰۹:۲۰</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="text-gray-800 font-medium">۹۹۰,۰۰۰ تومان</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-red-100 text-red-700 px-2 py-0.5 rounded-full text-xs">بازپرداخت شده</span>
                </div>
                <div class="col-span-2 flex flex-col md:items-center">
                    <span class="bg-red-100 text-red-700 px-2 py-0.5 rounded-full text-xs">لغو شده</span>
                </div>
                <div class="col-span-2 flex justify-start md:justify-center">
                    <button
                        class="border border-blue-100 text-blue-600 hover:bg-blue-50 bg-blue-50/50 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1 transition">
                        <span>مشاهده جزئیات</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>
</main>


@include('layout.footer')
