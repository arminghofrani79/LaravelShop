<main class="min-h-screen flex items-center justify-center bg-gray-50 px-4 py-10">

    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-6 text-center">

        {{-- آیکون موفقیت --}}
        <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        {{-- تیتر --}}
        <h2 class="text-xl font-bold text-gray-800 mb-4">سفارش شما با موفقیت ثبت شد</h2>

        {{-- خلاصه سفارش --}}
        <div class="space-y-3 border-t border-gray-100 pt-4 mt-4 text-right">
            <div class="flex justify-between text-sm">
                <span class="text-gray-500">شماره سفارش:</span>
                <span class="font-medium text-gray-800">{{ $order->order_number }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-gray-500">مبلغ نهایی:</span>
                <span class="font-medium text-gray-800">{{ number_format($order->final_price) }} تومان</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-gray-500">وضعیت سفارش:</span>
                {{-- وضعیت با بدج ساده و خوانا --}}
                @if ($order->status == 'pending')
                    <span class="bg-orange-100 text-orange-600 px-2 py-1 rounded text-xs">در انتظار</span>
                @elseif($order->status == 'completed')
                    <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">تکمیل شده</span>
                @elseif($order->status == 'canceled')
                    <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs">لغو شده</span>
                @else
                    <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs">{{ $order->status }}</span>
                @endif
            </div>
        </div>

        {{-- دکمه‌ها --}}
        <div class="flex flex-col sm:flex-row gap-3 mt-6 pt-4 border-t border-gray-100">
            <a href="{{ route('user-watch-order', $order) }}"
                class="flex-1 bg-slate-700 hover:bg-slate-800 text-white py-2.5 rounded-lg text-sm transition shadow-sm">
                مشاهده سفارش
            </a>
            <a href="{{ route('products') }}"
                class="flex-1 bg-white border border-gray-300 text-gray-700 py-2.5 rounded-lg text-sm hover:bg-gray-50 transition">
                بازگشت به فروشگاه
            </a>
        </div>

    </div>

</main>
