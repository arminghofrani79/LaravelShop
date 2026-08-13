@include('admin.layout.side')

<!-- left col -->
<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-5">
            <div class="flex justify-between items-start">
                <div>
                    <span class="block text-sm text-gray-500 mb-1">تعداد سفارش‌ها</span>
                    <span class="block text-2xl font-bold text-gray-800">586</span>
                </div>
                <div class="w-10 h-10 bg-yellow-50 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
            </div>
            <div class="mt-2 flex items-center gap-2 text-xs">
                <span class="text-green-600 font-medium">+18%</span>
                <span class="text-gray-400">در ۳۰ روز گذشته</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5">
            <div class="flex justify-between items-start">
                <div>
                    <span class="block text-sm text-gray-500 mb-1">تعداد کاربران</span>
                    <span class="block text-2xl font-bold text-gray-800">1,247</span>
                </div>
                <div class="w-10 h-10 bg-purple-50 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            <div class="mt-2 flex items-center gap-2 text-xs">
                <span class="text-green-600 font-medium">+49%</span>
                <span class="text-gray-400">در ۳۰ روز گذشته</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5">
            <div class="flex justify-between items-start">
                <div>
                    <span class="block text-sm text-gray-500 mb-1">تعداد محصولات</span>
                    <span class="block text-2xl font-bold text-gray-800">248</span>
                </div>
                <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
            </div>
            <div class="mt-2 flex items-center gap-2 text-xs">
                <span class="text-green-600 font-medium">+12%</span>
                <span class="text-gray-400">در ۳۰ روز گذشته</span>
            </div>
        </div>
    </div>

    {{-- products --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- last orders -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-5">
            <div class="flex justify-between items-center border-b border-gray-100 pb-4 mb-4">
                <h3 class="font-bold text-gray-800 text-sm">سفارش‌های اخیر</h3>
                <a href="{{ route('adminorders') }}"
                    class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                    <span>مشاهده همه</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-gray-500 border-b border-gray-100">
                            <th class="text-center pb-3 font-medium">شماره سفارش</th>
                            <th class="text-center pb-3 font-medium">مشتری</th>
                            <th class="text-center pb-3 font-medium">وضعیت</th>
                            <th class="text-center pb-3 font-medium">مبلغ</th>
                            <th class="text-center pb-3 font-medium">تاریخ</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b border-gray-50">
                            <td class="py-3 text-center font-medium">#1058</td>
                            <td class="py-3 text-center">علی محمدی</td>
                            <td class="py-3 text-center"><span
                                    class="bg-green-100 text-green-700 px-2 py-1 rounded text-[10px]">تکمیل
                                    شده</span></td>
                            <td class="py-3 text-center">۱,۵۲۰,۰۰۰ تومان</td>
                            <td class="py-3 text-center">
                                <div class="flex flex-col items-center text-xs">
                                    <span>۱۴۰۳/۰۲/۲۱</span>
                                    <span class="text-gray-400">۱۴:۳۰</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="py-3 text-center font-medium">#1057</td>
                            <td class="py-3 text-center">سارا احمدی</td>
                            <td class="py-3 text-center"><span
                                    class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-[10px]">در حال
                                    پردازش</span></td>
                            <td class="py-3 text-center">۷۸۰,۰۰۰ تومان</td>
                            <td class="py-3 text-center">
                                <div class="flex flex-col items-center text-xs">
                                    <span>۱۴۰۳/۰۲/۲۰</span>
                                    <span class="text-gray-400">۱۰:۲۰</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="py-3 text-center font-medium">#1056</td>
                            <td class="py-3 text-center">رضا کریمی</td>
                            <td class="py-3 text-center"><span
                                    class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-[10px]">ارسال
                                    شده</span></td>
                            <td class="py-3 text-center">۲,۳۴۰,۰۰۰ تومان</td>
                            <td class="py-3 text-center">
                                <div class="flex flex-col items-center text-xs">
                                    <span>۱۴۰۳/۰۲/۲۰</span>
                                    <span class="text-gray-400">۱۵:۱۰</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="py-3 text-center font-medium">#1055</td>
                            <td class="py-3 text-center">مریم موسوی</td>
                            <td class="py-3 text-center"><span
                                    class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-[10px]">در
                                    انتظار پرداخت</span></td>
                            <td class="py-3 text-center">۵۴۰,۰۰۰ تومان</td>
                            <td class="py-3 text-center">
                                <div class="flex flex-col items-center text-xs">
                                    <span>۱۴۰۳/۰۲/۱۹</span>
                                    <span class="text-gray-400">۱۸:۴۵</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- product less -->
        <div class="bg-white rounded-xl shadow-sm p-5">
            <h3 class="font-bold text-gray-800 text-sm mb-4 border-b border-gray-100 pb-4">محصولات کم‌موجودی
            </h3>

            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-between border-b border-gray-50 pb-3">
                    <div class="flex flex-col gap-1">
                        <span class="text-sm text-gray-800">WH-1000XM5</span>
                        <span class="text-xs text-gray-400">موجودی: <span class="text-gray-700">۳</span>
                            عدد</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="bg-red-100 text-red-600 px-2 py-0.5 rounded text-[10px]">کم‌موجودی</span>
                        <img src="https://picsum.photos/id/21/50/50" alt="product"
                            class="w-10 h-10 object-contain rounded-lg bg-gray-50">
                    </div>
                </div>
                <div class="flex items-center justify-between border-b border-gray-50 pb-3">
                    <div class="flex flex-col gap-1">
                        <span class="text-sm text-gray-800">Galaxy Watch 6</span>
                        <span class="text-xs text-gray-400">موجودی: <span class="text-gray-700">۵</span>
                            عدد</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="bg-red-100 text-red-600 px-2 py-0.5 rounded text-[10px]">کم‌موجودی</span>
                        <img src="https://picsum.photos/id/96/50/50" alt="product"
                            class="w-10 h-10 object-contain rounded-lg bg-gray-50">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- articles -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- last articles -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-5">
            <div class="flex justify-between items-center border-b border-gray-100 pb-4 mb-4">
                <h3 class="font-bold text-gray-800 text-sm">مقالات اخیر</h3>
                <a href="{{ route('adminarticles') }}"
                    class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                    <span>مشاهده همه</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div class="flex flex-col gap-2">
                    <img src="https://picsum.photos/id/10/200/150" alt="article"
                        class="w-full h-20 rounded-lg object-cover">
                    <div>
                        <span
                            class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-[10px] inline-block mb-1">آموزش</span>
                        <h4 class="text-xs font-bold text-gray-800 line-clamp-2">راهنمای خرید لپ‌تاپ مناسب برای
                            برنامه‌نویسان</h4>
                        <div class="flex justify-between items-center mt-2 text-[10px] text-gray-400">
                            <span>۱۴۰۳/۰۲/۲۰</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


</div>

</main>

@include('layout.footer')
