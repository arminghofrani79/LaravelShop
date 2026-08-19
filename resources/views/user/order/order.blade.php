@section('title', 'سفارش‌های من | LaravelShop')
@include('user.layout.side')

{{-- left col --}}
<div class="lg:col-span-3 flex flex-col gap-6">

    <!-- cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- all orders cards -->
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">کل سفارش‌ها</span>
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $allOrdersCount }}</span>
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
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $deliveredOrdersCount }}</span>
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
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $pendingOrdersCount }}</span>
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
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $canceledOrdersCount }}</span>
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

            <!-- orderd -->
            @forelse ($orders as $order)
                <div
                    class="grid grid-cols-2 md:grid-cols-12 gap-3 md:gap-4 py-4 border-b border-gray-50 items-center text-sm">
                    <div class="col-span-2 flex flex-col md:items-center gap-0.5">
                        <span class="text-gray-800 font-medium">{{ $order->order_number }}</span>
                    </div>
                    <div class="col-span-2 flex flex-col md:items-center text-gray-600 gap-0.5">
                        <span>{{ $order->created_at->format('Y/m/d') }}</span>
                        <span class="text-xs text-gray-400">{{ $order->created_at->format('H:i') }}</span>
                    </div>
                    <div class="col-span-2 flex flex-col md:items-center">
                        <span class="text-gray-800 font-medium">{{ number_format($order->final_price) }} تومان</span>
                    </div>
                    <div class="col-span-2 flex flex-col md:items-center">
                        <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full text-xs">
                            {{ $order->status }}</span>
                    </div>
                    <div class="col-span-2 flex flex-col md:items-center">
                        <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full text-xs">
                            {{ $order->payment_status }}
                        </span>
                    </div>
                    <div class="col-span-2 flex justify-start md:justify-center">
                        <a href="{{ route('user-watch-order', ['order' => $order->id]) }}"
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
            @empty
                <div class="flex flex-col">
                    <div colspan="6" class="py-10 text-center text-gray-400">
                        هنوز سفارشی ثبت نکرده‌اید.
                    </div>
                    <div class="flex justify-center">
                        <a href="{{ route('products') }}"
                            class="bg-gray-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-gray-700 transition">
                            بازگشت به فروشگاه
                        </a>
                    </div>
                </div>
            @endforelse


        </div>
        @if ($orders->hasPages())
            <div class="mt-5">
                {{ $orders->links() }}
            </div>
        @endif
    </div>

</div>
</main>


@include('layout.footer')
