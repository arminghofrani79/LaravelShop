@include('user.layout.side')
<!-- left col -->
<div class="lg:col-span-3 flex flex-col gap-6">

    <!-- profile informatin -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center gap-2 text-lg font-bold text-gray-800 mb-6 border-b border-gray-100 pb-4">
            <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
            <span>اطلاعات حساب</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-500">نام</label>
                <input readonly type="text" placeholder="{{ Auth::user()->name }}"
                    class="font-medium text-gray-800 text-sm bg-gray-50 p-2 rounded outline-0">
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-500">ایمیل</label>
                <input readonly type="text" placeholder="{{ Auth::user()->email }}"
                    class="font-medium text-gray-800 text-sm bg-gray-50 p-2 rounded outline-0">
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('user-edit-profile', ['user' => Auth::user()->id]) }}"
                class="bg-gray-600 hover:bg-gray-700 w-1/4 text-white px-6 py-2.5 rounded-lg text-sm flex items-center gap-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
                ویرایش اطلاعات
            </a>
        </div>
    </div>

    <!-- cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">تعداد سفارش‌ها</span>
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $allOrder }}</span>
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
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $pendingOrder }}</span>
            </div>
            <div class="w-10 h-10 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <div class="bg-red-200 rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500 ">علاقه‌مندی‌ها</span>
                <span class="text-lg font-bold text-gray-800 mt-1">بزودی...</span>
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
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $addresses }}</span>
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
                    <img src="{{ 'images/icons/buy.webp' }}" alt="کاربر"class="w-6 h-6 object-cover">
                    آخرین سفارش‌ها
                </h4>
                <a href="{{ route('user-order') }}"
                    class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                    <span>مشاهده همه سفارش‌ها</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>
            @forelse ($lastOrders as $order)
                <div class="flex flex-col gap-3">
                    <div class="flex justify-between items-center border-b border-gray-50 pb-2 text-sm">
                        <div class="flex flex-col gap-0.5">
                            <span class="text-gray-800 font-medium">{{ $order->order_number }}</span>
                            <span class="text-xs text-gray-400">{{ $order->created_at->format('d/m/Y') }}</span>
                        </div>
                        <div class="flex flex-col items-end gap-0.5">
                            <span class="text-gray-800 font-medium">{{ number_format($order->final_price) }}
                                تومان</span>
                            <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded-full">
                                {{ $order->payment_status }}
                            </span>
                        </div>
                    </div>

                </div>
            @empty
                <span class="text-gray-300 flex justify-center text-center">شما لیست سفارشی ندارید</span>
            @endforelse

        </div>

        <!-- last address -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center gap-2 border-b border-gray-100 pb-3 mb-4">
                <img src="{{ 'images/icons/address.webp' }}" alt="کاربر"class="w-6 h-6 object-cover">
                <h4 class="font-bold text-gray-800">آدرس پیش‌فرض</h4>
            </div>

            @if ($defaultAddress)
                <div class="text-sm text-gray-600 space-y-2">
                    <p>{{ $defaultAddress->address }}</p>
                    <div class="pt-2 text-xs text-gray-500 space-y-1">
                        <p><span class="font-medium">کد پستی:</span> {{ $defaultAddress->postal_code ?? '-' }}</p>
                        <p><span class="font-medium">تلفن:</span> {{ $defaultAddress->phone ?? '-' }}</p>
                    </div>
                </div>
            @else
                <div class="text-sm text-gray-400 text-center py-4 border border-dashed border-gray-200 rounded-lg">
                    <p>هیچ آدرس پیش‌فرضی ثبت نشده است.</p>
                    <a href="{{ route('user-address-create') }}"
                        class="text-blue-600 text-xs mt-2 inline-block hover:underline">
                        افزودن آدرس جدید
                    </a>
                </div>
            @endisset

            <div class="mt-4 pt-4 border-t border-gray-100">
                <a href="{{ route('user-address') }}"
                    class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-lg text-sm flex items-center gap-2 transition w-full justify-center">
                    <img src="{{ 'images/icons/edit.webp' }}" alt="کاربر"class="w-6 h-6 object-cover">
                    ویرایش آدرس
                </a>
            </div>
    </div>

</div>

</div>

</div>

</main>

@include('layout.footer')
