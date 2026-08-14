@include('profile.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-start gap-4">
        <a href="{{ route('user-order') }}"
            class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 transition shadow-sm cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span>بازگشت به سفارش‌ها</span>
        </a>

        <div class="flex flex-col items-center w-full gap-1">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">جزئیات سفارش</h1>
        </div>
    </div>

    {{-- cards --}}
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4">
        {{-- order number --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center gap-1">
            <span class="block text-xs text-gray-500">شماره سفارش</span>
            <span class="block text-sm font-bold text-gray-800">LS-10067#</span>
        </div>

        {{-- order date --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center gap-1">
            <span class="block text-xs text-gray-500">تاریخ سفارش</span>
            <div class="block text-sm font-bold text-gray-800 flex flex-col gap-0.5 items-center">
                <span>۱۴۰۳/۰۳/۲۸</span>
                <span class="text-xs text-gray-400 font-normal">۱۵:۴۵</span>
            </div>
        </div>

        {{-- order status --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center gap-1">
            <span class="block text-xs text-gray-500">وضعیت سفارش</span>
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-md text-xs font-medium">تحویل شده</span>
        </div>

        {{-- payment status --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center gap-1">
            <span class="block text-xs text-gray-500">وضعیت پرداخت</span>
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-md text-xs font-medium">پرداخت شده</span>
        </div>
    </div>

    {{-- part2: info --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- roght:resirver --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                    اطلاعات دریافت‌کننده
                </h3>
            </div>

            <div class="flex flex-col gap-3 text-sm">
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">نام و نام خانوادگی:</span>
                    <span class="text-gray-800 font-medium">علی محمدی</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">شماره تماس:</span>
                    <span class="text-gray-800">۰۹۱۲ ۱۲۳ ۴۵۶۷</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">ایمیل:</span>
                    <span class="text-gray-800">ali.mohammadi@example.com</span>
                </div>
            </div>
        </div>

        {{-- left: address --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/address.png') }}" alt="">
                    نشانی ارسال
                </h3>
            </div>

            <div class="flex flex-col gap-3 text-sm">
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">استان، شهر:</span>
                    <span class="text-gray-800">تهران، تهران</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2 items-start">
                    <span class="text-gray-500 text-xs mt-1">آدرس:</span>
                    <span class="text-gray-800 text-right text-xs leading-relaxed">خیابان ولیعصر، خیابان توانیر، پلاک
                        ۲۴، واحد ۳، طبقه ۴</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">کد پستی:</span>
                    <span class="text-gray-800">۱۵۹۸۷۴۳۶۱</span>
                </div>
            </div>
        </div>
    </div>

    {{-- products --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 overflow-x-auto">
        <div class="flex items-center gap-2 pb-4 mb-4 border-b border-gray-100">
            <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                <img class="w-4 h-4" src="{{ asset('images/icons/buy.png') }}" alt="">
                محصولات سفارش
            </h3>
        </div>

        <table class="w-full text-sm min-w-[400px]">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-right pb-3 font-medium pl-2">محصول</th>
                    <th class="text-center pb-3 font-medium">تعداد</th>
                    <th class="text-center pb-3 font-medium">قیمت واحد</th>
                    <th class="text-center pb-3 font-medium">قیمت کل</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                {{-- row1 --}}
                <tr class="border-b border-gray-50">
                    <td class="py-4 flex flex-col items-start gap-1 pl-2">
                        <span class="font-medium text-gray-800 text-sm">قهوه ساز دلونگی مدل EC685</span>
                        <span class="text-xs text-gray-400">SKU: LS-P1001</span>
                    </td>
                    <td class="py-4 text-center">1</td>
                    <td class="py-4 text-center">۸,۴۵۰,۰۰۰ تومان</td>
                    <td class="py-4 text-center font-medium text-gray-800">۸,۴۵۰,۰۰۰ تومان</td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- order --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-4 mb-2 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/order.png') }}" alt="">
                    خلاصه سفارش
                </h3>
            </div>

            <div class="flex flex-col gap-3">
                <div class="flex justify-between text-sm text-gray-600">
                    <span>مجموع قیمت کالاها</span>
                    <span>۱۱,۱۱۰,۰۰۰ تومان</span>
                </div>
                <div class="flex justify-between text-sm text-green-600">
                    <span>تخفیف</span>
                    <span>- ۵۵۵,۰۰۰ تومان</span>
                </div>
                <div class="flex justify-between text-sm text-gray-600">
                    <span>هزینه ارسال</span>
                    <span>۲۰,۰۰۰ تومان</span>
                </div>
                <div class="flex justify-between text-lg font-bold text-gray-800 pt-4 mt-2 border-t border-gray-100">
                    <span>مبلغ نهایی</span>
                    <span>۱۰,۵۷۵,۰۰۰ تومان</span>
                </div>
            </div>
        </div>

        {{-- send info --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-4 mb-2 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/send.png') }}" alt="">
                    اطلاعات ارسال
                </h3>
            </div>

            <div class="flex flex-col gap-3 text-sm">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-xs">وضعیت ارسال:</span>
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-md text-xs font-medium">تحویل شده</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">کد رهگیری:</span>
                    <span class="text-gray-800 font-medium">IR1234567890</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">روش ارسال:</span>
                    <span class="text-gray-800">پست پیشتاز</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">تاریخ تحویل:</span>
                    <span class="text-gray-800">۱۴۰۳/۰۳/۳۰ - ۱۲:۱۰</span>
                </div>
            </div>
        </div>

    </div>

</div>

</main>
@include('layout.footer')
