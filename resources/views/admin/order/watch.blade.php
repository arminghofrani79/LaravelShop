@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-start gap-3">
        <div class="flex flex-col items-center w-full gap-1">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">جزئیات سفارش</h1>
        </div>
    </div>

    {{-- summary status --}}
    <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
        {{-- order number --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-[10px] text-gray-500 mb-1">شماره سفارش</span>
                <span class="block text-sm font-bold text-gray-800">{{ $order->order_number }}</span>
            </div>
            <div class="w-8 h-8 bg-gray-50 rounded-full flex items-center justify-center text-blue-600">
                <img class="h-4 w-4" src="{{ asset('images/icons/search.png') }}" alt="">
            </div>
        </div>

        {{-- cunsomer --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-[10px] text-gray-500 mb-1">مشتری</span>
                <span class="block text-sm font-bold text-gray-800">{{ $order->user->name }}</span>
            </div>
            <div class="w-8 h-8 bg-gray-50 rounded-full flex items-center justify-center text-blue-600">
                <img class="h-4 w-4" src="{{ asset('images/icons/eye.png') }}" alt="">
            </div>
        </div>

        {{-- date --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-[10px] text-gray-500 mb-1">تاریخ ثبت</span>
                <div class="block text-sm font-bold text-gray-800 flex flex-col gap-0.5">
                    <span>{{ $order->created_at->format('Y/m/d') }}</span>
                    <span class="text-[10px] text-gray-400 font-normal">{{ $order->created_at->format('H:i') }}</span>
                </div>
            </div>
            <div class="w-8 h-8 bg-gray-50 rounded-full flex items-center justify-center text-blue-600">
                <img class="h-4 w-4" src="{{ asset('images/icons/calendar.png') }}" alt="">
            </div>
        </div>

        {{-- مبلغ کل --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="block text-[10px] text-gray-500 mb-1">مبلغ کل</span>
                <span class="block text-sm font-bold text-gray-800">{{ number_format($order->final_price) }}
                    تومان</span>
            </div>
            <div class="w-8 h-8 bg-gray-50 rounded-full flex items-center justify-center text-blue-600">
                <img class="h-4 w-4" src="{{ asset('images/icons/money.png') }}" alt="">
            </div>
        </div>

        {{-- وضعیت پرداخت و سفارش --}}
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-2">
                    <span class="text-[10px] text-gray-500">وضعیت پرداخت</span>
                    <span
                        class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-[10px] font-medium">{{ $order->payment_status }}</span>
                </div>
            </div>
            <div class="w-8 h-8 bg-gray-50 rounded-full flex items-center justify-center text-blue-600">
                <img class="h-4 w-4" src="{{ asset('images/icons/clock.png') }}" alt="">
            </div>
        </div>
    </div>

    {{-- manage order --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col gap-4">
            <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="h-4 w-4" src="{{ asset('images/icons/status.png') }}" alt="">
                    مدیریت وضعیت سفارش
                </h3>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <span class="text-xs text-gray-600 font-medium">وضعیت فعلی سفارش:</span>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded text-xs font-medium">
                        {{ $order->status }}</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 items-end">
                    <div class="w-full sm:w-1/2">
                        <label class="block text-[10px] text-gray-500 mb-1">تغییر وضعیت سفارش</label>
                        <form action="{{ route('admin-order-status', ['order' => $order->id]) }}" method="POST"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none cursor-pointer">
                            @csrf
                            @method('PUT')
                            <select name="status"
                                class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-700 bg-white">
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>در انتظار
                                </option>
                                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>در
                                    حال پردازش</option>
                                <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>ارسال شده
                                </option>
                                <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>تکمیل
                                    شده</option>
                                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>لغو
                                    شده</option>
                            </select>
                            <button type="submit"
                                class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-xs font-medium flex items-center justify-center gap-2 transition shadow-sm">
                                بروزرسانی وضعیت
                            </button>
                        </form>
                    </div>

                </div>

                <p class="text-[10px] text-gray-400 mt-1">برای تغییر وضعیت سفارش، وضعیت جدید را انتخاب کرده و روی دکمه
                    بروزرسانی کلیک کنید.</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="h-4 w-4" src="{{ asset('images/icons/like.png') }}" alt="">
                    اقدامات سفارش
                </h3>
            </div>

            <div class="flex flex-col gap-3">
                <button
                    class="flex items-center justify-between bg-white border border-gray-200 rounded-lg p-3 text-sm text-gray-700 hover:bg-gray-50 transition cursor-pointer">
                    <span>مشاهده سفارش</span>
                </button>
                <button
                    class="flex items-center justify-between bg-white border border-gray-200 rounded-lg p-3 text-sm text-gray-700 hover:bg-gray-50 transition cursor-pointer">
                    <span>چاپ فاکتور</span>
                </button>
                <button
                    class="flex items-center justify-between bg-white border border-gray-200 rounded-lg p-3 text-sm text-gray-700 hover:bg-gray-50 transition cursor-pointer">
                    <span>ارسال فاکتور به ایمیل</span>
                </button>
                <button
                    class="flex items-center justify-between bg-white border border-gray-200 rounded-lg p-3 text-sm text-gray-700 hover:bg-gray-50 transition cursor-pointer">
                    <span>ایجاد یادداشت</span>
                </button>
            </div>
        </div>
    </div>

    {{-- customer info --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- info-right part --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="h-4 w-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                    اطلاعات مشتری
                </h3>
            </div>

            <div class="grid grid-cols-1 gap-4 text-sm">
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">نام و نام خانوادگی:</span>
                    <span class="text-gray-800 font-medium">{{ $order->user->name }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">ایمیل:</span>
                    <span class="text-gray-800">{{ $order->user->email }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">شماره موبایل:</span>
                    <span class="text-gray-800 font-medium">{{ $order->address->phone }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">نوع یادداشت:</span>
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-[10px] font-medium">مشتری ثبت نام
                        شده</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500 text-xs">تاریخ عضویت:</span>
                    <span class="text-gray-400 text-xs">{{ $order->user->created_at->format('Y/m/d') }}</span>
                </div>
            </div>
        </div>

        {{-- address-left part --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col gap-4">
            <div class="flex items-center gap-2 pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="h-4 w-4" src="{{ asset('images/icons/location.png') }}" alt="">
                    آدرس ارسال
                </h3>
            </div>

            <div class="flex flex-col gap-3 text-sm">
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">گیرنده:</span>
                    <span class="text-gray-800 font-medium">{{ $order->address->full_name }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">شماره موبایل:</span>
                    <span class="text-gray-800 font-medium">{{ $order->address->phone }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">استان:</span>
                    <span class="text-gray-800">{{ $order->address->province }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">شهر:</span>
                    <span class="text-gray-800">{{ $order->address->city }}</span>
                </div>
                <div class="flex justify-between border-b border-gray-50 pb-2">
                    <span class="text-gray-500 text-xs">آدرس:</span>
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

    {{-- order list --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 overflow-x-auto">
        <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-100">
            <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                <img class="h-4 w-4" src="{{ asset('images/icons/order.png') }}" alt="">
                محصولات سفارش
            </h3>
        </div>

        <table class="w-full text-sm min-w-[400px]">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-right pb-3 font-medium">محصول</th>
                    <th class="text-center pb-3 font-medium">قیمت واحد</th>
                    <th class="text-center pb-3 font-medium">تعداد</th>
                    <th class="text-center pb-3 font-medium">مجموع</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                @foreach ($order->orderItems as $item)
                    <tr class="border-b border-gray-50">

                        <td class="py-3 flex items-center gap-3">

                            <img src="{{ asset('storage/images/products/' . $item->product->image) }}"
                                alt="{{ $item->product->name }}"
                                class="w-10 h-10 object-contain rounded border border-gray-100 bg-gray-50">

                            <span class="font-medium text-gray-800 text-sm">
                                {{ $item->product->name }}
                            </span>

                        </td>

                        <td class="py-3 text-center">
                            {{ number_format($item->price) }} تومان
                        </td>

                        <td class="py-3 text-center">
                            {{ $item->quantity }}
                        </td>

                        <td class="py-3 text-center font-medium text-gray-800">
                            {{ number_format($item->total) }} تومان
                        </td>

                    </tr>
                @endforeach

            </tbody>

            {{-- order sum --}}
            <tfoot class="bg-gray-50/80 border-t border-gray-200">
                <tr>
                    <td colspan="2" class="py-3 text-right font-bold text-gray-800 text-xs px-4">

                        تعداد کل محصولات:
                        {{ $order->orderItems->sum('quantity') }} عدد

                    </td>

                    <td colspan="2" class="py-3 text-left font-bold text-gray-800 text-sm">

                        جمع کل:
                        {{ number_format($order->total_price) }} تومان

                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

</main>
@include('layout.footer')
