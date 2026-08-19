@section('title', 'مشاهده کاربر | LaravelShop')
@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">مشاهده کاربر</h1>
        <div class="flex items-center gap-1 text-xs text-gray-500">
            <span>پروفایل کاربر</span>
        </div>
    </div>

    {{-- بخش ۱: اطلاعات اصلی کاربر --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-5">
        <div class="flex justify-between gap-3 pb-4 border-b border-gray-100">
            <div class="flex">
                <div class="flex"
                    class="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 overflow-hidden">
                    <img src="{{ asset('images/icons/profile.webp') }}" class="w-15 h-15" alt="user">
                </div>
                <div>
                    <h2 class="text-xl font-bold text-gray-800">{{ $user->name }} {{ $user->last_name }}</h2>
                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                </div>
            </div>

            <div class="flex flex-row text-center justify-center">
                <a class="text-gray-400 rext-sm" href="{{ route('admin-edit-user', ['user' => $user->id]) }}">ویرایش
                    کاربر
                </a>
                <img class="h-4 w-4" src="{{ asset('images/icons/edit.webp') }}" alt="">

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div>
                <span class="text-xs text-gray-500 block">ایمیل</span>
                <span class="text-sm font-medium text-gray-800">{{ $user->email }}</span>
            </div>
            <div>
                <div>
                    <span class="text-xs text-gray-500 block">تاریخ عضویت</span>
                    <span
                        class="text-sm text-gray-800">{{ \Morilog\Jalali\Jalalian::fromDateTime($user->created_at)->format('Y/m/d') }}</span>
                </div>
            </div>
            <div>
                <span class="text-xs text-gray-500 block">وضعیت</span>
                <span
                    class="inline-block px-2 py-1 rounded text-xs font-medium {{ $user->status == 'active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                    {{ $user->status == 'active' ? 'فعال' : 'غیرفعال' }}
                </span>
            </div>

        </div>
    </div>

    {{-- بخش ۲: آدرس‌های کاربر --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
            <img class="w-4 h-4" src="{{ asset('images/icons/address.webp') }}" alt="">
            آدرس‌ها
        </h3>

        @forelse($user->addresses as $address)
            <div
                class="flex flex-col sm:flex-row justify-between items-start border-b border-gray-100 py-4 last:border-0">
                <div class="space-y-1">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-800">{{ $address->title ?? 'آدرس' }}</span>
                        @if ($address->is_default)
                            <span
                                class="bg-green-100 text-green-700 text-[10px] px-2 py-0.5 rounded-full">پیش‌فرض</span>
                        @endif
                    </div>
                    <p class="text-sm text-gray-600">{{ $address->address }}</p>
                    <div class="text-xs text-gray-500">
                        {{ $address->province }}، {{ $address->city }} | کد پستی: {{ $address->postal_code }}
                    </div>
                    <div class="text-xs text-gray-500">
                        گیرنده: {{ $address->full_name }} - {{ $address->phone }}
                    </div>
                </div>
            </div>
        @empty
            <p class="text-sm text-gray-400 text-center py-4">هیچ آدرسی برای این کاربر ثبت نشده است.</p>
        @endforelse
    </div>

    {{-- بخش ۳: سفارش‌های کاربر --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
            <img class="w-4 h-4" src="{{ asset('images/icons/order.webp') }}" alt="">

            سفارش‌ها
        </h3>

        @forelse($user->orders as $order)
            <div
                class="flex flex-col sm:flex-row justify-between items-center border-b border-gray-100 py-4 last:border-0">
                <div class="w-full sm:w-auto space-y-1">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-800">#{{ $order->order_number }}</span>
                        <span
                            class="text-xs text-gray-400">{{ \Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('Y/m/d') }}</span>
                    </div>
                    <div class="text-sm text-gray-600">
                        مبلغ: {{ number_format($order->final_price) }} تومان
                    </div>
                </div>
                <div class="flex items-center gap-3 mt-2 sm:mt-0">
                    <span
                        class="px-2 py-1 rounded text-xs font-medium {{ $order->status == 'completed' ? 'bg-green-100 text-green-700' : ($order->status == 'pending' ? 'bg-orange-100 text-orange-700' : ($order->status == 'canceled' ? 'bg-red-100 text-red-700' : 'bg-gray-100 text-gray-600')) }}">
                        {{ $order->status == 'completed' ? 'تکمیل شده' : ($order->status == 'pending' ? 'در انتظار' : ($order->status == 'canceled' ? 'لغو شده' : $order->status)) }}
                    </span>
                    <a href="{{ route('admin-watch-order', ['order' => $order->id]) }}"
                        class="text-xs text-blue-600 hover:underline">جزئیات</a>
                </div>
            </div>
        @empty
            <p class="text-sm text-gray-400 text-center py-4">این کاربر هنوز سفارشی ثبت نکرده است.</p>
        @endforelse
    </div>

    {{-- دکمه بازگشت --}}
    <div class="flex justify-end">
        <a href="{{ route('adminusers') }}"
            class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center cursor-pointer">
            بازگشت
        </a>
    </div>

</div>

</main>
@include('layout.footer')
