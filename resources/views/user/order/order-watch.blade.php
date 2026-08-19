@section('title', 'جزئیات سفارش من | LaravelShop')
@include('user.layout.side')

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
            <span class="block text-sm font-bold text-gray-800">{{ $order->order_number }}</span>
        </div>

        {{-- order date --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center gap-1">
            <span class="block text-xs text-gray-500">تاریخ سفارش</span>
            <div class="block text-sm font-bold text-gray-800 flex flex-col gap-0.5 items-center">
                <span>{{ $order->jalali_created_at }}</span>
                <span class="text-xs text-gray-400 font-normal">{{ $order->created_at->format('Y/m/d') }}</span>
            </div>
        </div>

        {{-- order status --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center gap-1">
            <span class="block text-xs text-gray-500">وضعیت سفارش</span>
            <span
                class="bg-green-100 text-green-700 px-3 py-1 rounded-md text-xs font-medium">{{ $order->status }}</span>
        </div>

        {{-- payment status --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center gap-1">
            <span class="block text-xs text-gray-500">وضعیت پرداخت</span>
            <span
                class="bg-green-100 text-green-700 px-3 py-1 rounded-md text-xs font-medium">{{ $order->payment_status }}</span>
        </div>
    </div>

    {{-- part2: info --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- roght:resirver --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                    اطلاعات دریافت‌کننده
                </h3>
            </div>

            <div class="flex flex-col gap-3 text-sm">
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">نام و نام خانوادگی:</span>
                    <span class="text-gray-800 font-medium">{{ $order->address->full_name }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">شماره تماس:</span>
                    <span class="text-gray-800">{{ $order->address->phone }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">ایمیل:</span>
                    <span class="text-gray-800">{{ $order->user->email }}</span>
                </div>
            </div>
        </div>

        {{-- left: address --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/address.webp') }}" alt="">
                    نشانی ارسال
                </h3>
            </div>

            <div class="flex flex-col gap-3 text-sm">
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">استان، شهر:</span>
                    <span class="text-gray-800">{{ $order->address->province }},{{ $order->address->city }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2 items-start">
                    <span class="text-gray-500 text-xs mt-1">آدرس:</span>
                    <span class="text-gray-800 text-right text-xs leading-relaxed">
                        {{ $order->address->address }}
                    </span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">کد پستی:</span>
                    <span class="text-gray-800">{{ $order->address->postal_code }}</span>
                </div>
            </div>
        </div>
    </div>

    {{-- products --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 overflow-x-auto">
        <div class="flex items-center gap-2 pb-4 mb-4 border-b border-gray-100">
            <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                <img class="w-4 h-4" src="{{ asset('images/icons/buy.webp') }}" alt="">
                محصولات سفارش
            </h3>
        </div>

        <table class="w-full text-sm min-w-[400px]">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-right pb-3 font-medium pl-2">تصویر</th>
                    <th class="text-right pb-3 font-medium pl-2">محصول</th>
                    <th class="text-center pb-3 font-medium">تعداد</th>
                    <th class="text-center pb-3 font-medium">قیمت واحد</th>
                    <th class="text-center pb-3 font-medium">قیمت کل</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                {{-- row product --}}
                @forelse ($order->orderItems as $item)
                    <tr class="border-b border-gray-50">
                        <td><img src="{{ asset('storage/images/products/' . $item->product->image) }}"
                                class="w-12 h-12 object-contain" alt="{{ $item->product->name }}"></td>
                        <td class="py-4 flex flex-col items-start gap-1 pl-2">
                            <span class="font-medium text-gray-800 text-sm">{{ $item->product->name }}</span>
                        </td>
                        <td class="py-4 text-center"> {{ $item->quantity }}</td>
                        <td class="py-4 text-center">{{ number_format($item->price) }} </td>
                        <td class="py-4 text-center font-medium text-gray-800">{{ number_format($item->total) }} تومان
                        </td>
                    </tr>
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

            </tbody>
        </table>
    </div>

    {{-- order --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-4 mb-2 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/order.webp') }}" alt="">
                    خلاصه سفارش
                </h3>
            </div>

            <div class="flex flex-col gap-3">
                <div class="flex justify-between text-sm text-gray-600">
                    <span>تعداد کالاها</span>
                    <span>{{ $order->orderItems->sum('quantity') }} عدد</span>
                </div>
                <div class="flex justify-between text-sm text-green-600">
                    <span>تخفیف</span>
                    <span>{{ number_format($order->discount_amount) }} تومان</span>
                </div>
                <div class="flex justify-between text-sm text-gray-600">
                    <span>هزینه ارسال</span>
                    <span>{{ number_format($order->shipping_cost) }} تومان</span>
                </div>
                <div class="flex justify-between text-lg font-bold text-gray-800 pt-4 mt-2 border-t border-gray-100">
                    <span>مبلغ نهایی</span>
                    <span>{{ number_format($order->final_price) }} تومان</span>
                </div>
            </div>
        </div>

        {{-- send info --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-4 mb-2 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/send.webp') }}" alt="">
                    کد رهگیری پستی
                </h3>
            </div>
            @if ($order->tracking_code)
                <div>
                    کد رهگیری:
                    {{ $order->tracking_code }}
                </div>
            @else
                <p class="text-gray-300">
                    سفارش خود را کامل کنید و بمحض ارسال کدمرسوله در اینجا نمایش داده خواهد شد...
                </p>
            @endif
        </div>

    </div>

</div>

</main>
@include('layout.footer')
