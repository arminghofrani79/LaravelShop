@include('admin.layout.side')


<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">مدیریت سفارش‌ها</h1>
    </div>

    <!-- cards -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- کل سفارش‌ها -->
        <div class="bg-white rounded-xl shadow-sm p-5 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-xs text-gray-500 mb-1">کل سفارش‌ها</span>
                <span class="block text-xl font-bold text-gray-800">{{ $allOrdersCount }}</span>
            </div>
            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
        </div>

        <!-- سفارش‌های در انتظار -->
        <div class="bg-white rounded-xl shadow-sm p-5 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-xs text-gray-500 mb-1">سفارش‌های در انتظار</span>
                <span class="block text-xl font-bold text-gray-800">{{ $pendingOrdersCount }}</span>
            </div>
            <div class="w-10 h-10 bg-yellow-50 rounded-full flex items-center justify-center text-yellow-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <!-- سفارش‌های تکمیل شده -->
        <div class="bg-white rounded-xl shadow-sm p-5 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-xs text-gray-500 mb-1">سفارش‌های تکمیل شده</span>
                <span class="block text-xl font-bold text-gray-800">{{ $completedOrdersCount }}</span>
            </div>
            <div class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <!-- سفارش‌های برگشتی -->
        <div class="bg-white rounded-xl shadow-sm p-5 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-xs text-gray-500 mb-1">سفارش‌های برگشتی</span>
                <span class="block text-xl font-bold text-gray-800">{{ $cancledOrdersCount }}</span>
            </div>
            <div class="w-10 h-10 bg-red-50 rounded-full flex items-center justify-center text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
            </div>
        </div>
    </div>

    {{-- search bar --}}
    <div
        class="flex flex-wrap gap-4 items-center justify-between p-4 bg-white rounded-xl border border-gray-200 shadow-sm">

        <div class="flex flex-wrap gap-4 w-full md:w-auto">
            <!-- search -->
            <div class="relative w-full md:w-72">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <img class="w-4 h-4" src="{{ asset('images/icons/search.webp') }}" alt="">
                </div>
                <input type="text" placeholder="جستجو برای شماره سفارش، مشتری..."
                    class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- staus filter -->
            <select
                class="w-full md:w-40 px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                <option>همه وضعیت‌ها</option>
                <option>در انتظار</option>
                <option>در حال پردازش</option>
                <option>تکمیل شده</option>
            </select>

        </div>

        <!-- button search filter-->
        <button
            class="w-full md:w-auto bg-gray-600 hover:bg-gray-700 text-white px-5 py-2.5 rounded-lg text-sm flex items-center justify-center gap-2 transition shadow-sm">
            <img class="w-4 h-4" src="{{ asset('images/icons/order.webp') }}" alt="">
            جزئیات سفارشات
        </button>
    </div>

    <!-- order table -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-center pb-4 font-medium">شماره سفارش</th>
                    <th class="text-center pb-4 font-medium">مشتری</th>
                    <th class="text-center pb-4 font-medium">تاریخ</th>
                    <th class="text-center pb-4 font-medium">مبلغ</th>
                    <th class="text-center pb-4 font-medium">وضعیت</th>
                    <th class="text-center pb-4 font-medium">پرداخت</th>
                    <th class="text-center pb-4 font-medium">عملیات</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">

                @foreach ($orders as $order)
                    <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">

                        <td class="py-4 text-center font-medium text-blue-600">
                            #{{ $order->order_number }}
                        </td>

                        <td class="py-4 text-center">
                            <div class="flex flex-col items-center text-xs">
                                <span class="font-medium">
                                    {{ $order->user->name }}
                                </span>

                                <span class="text-gray-400">
                                    {{ $order->user->email }}
                                </span>
                            </div>
                        </td>

                        <td class="py-4 text-center">
                            <div class="flex flex-col items-center text-xs">
                                <span>
                                    {{ $order->created_at->format('Y/m/d') }}
                                </span>

                                <span class="text-gray-400">
                                    {{ $order->created_at->format('H:i') }}
                                </span>
                            </div>
                        </td>

                        <td class="py-4 text-center font-medium">
                            {{ number_format($order->final_price) }} تومان
                        </td>

                        <td class="py-4 text-center">
                            {{ $order->status }}
                        </td>

                        <td class="py-4 text-center">
                            {{ $order->payment_status }}
                        </td>

                        <td class="py-4 text-center">
                            <div class="flex justify-center">
                                <a href="{{ route('admin-watch-order', ['order' => $order->id]) }}"
                                    class="w-8 h-8 flex items-center justify-center border border-gray-200 text-gray-500 hover:bg-gray-50 rounded-lg transition">

                                    <img class="h-4 w-4" src="{{ asset('images/icons/eye.webp') }}" alt="">
                                </a>
                            </div>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- بخش 4: صفحه‌بندی -->
    <div class="mt-5">
        {{ $orders->links() }}
    </div>

</div>


</main>
@include('layout.footer')
