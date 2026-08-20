@section('title', 'پروفایل کاربری | LaravelShop')
@include('user.layout.side')
<!-- left col -->
<div class="flex flex-col gap-8 lg:col-span-4">

    {{-- welcome banner --}}
    <section class="profile-welcome-banner relative overflow-hidden rounded-2xl border border-[#393E46]/10 bg-gradient-to-l from-[#F5F6F7] via-[#eef8fa] to-[#f2ebff] px-5 py-6 shadow-sm sm:px-8 sm:py-8" aria-label="پیام خوش‌آمدگویی">
        <span class="profile-welcome-orb profile-welcome-orb-one"></span>
        <span class="profile-welcome-orb profile-welcome-orb-two"></span>
        <p class="relative z-10 text-right text-2xl font-bold leading-10 text-[#222831] sm:text-3xl lg:text-4xl">
            سلام، {{ Auth::user()->name }}
        </p>
    </section>

    <!-- profile informatin -->
    <section class="rounded-2xl border border-[#393E46]/10 bg-white p-6 shadow-sm sm:p-8">
        <div class="mb-7 flex items-center gap-3 border-b border-[#393E46]/10 pb-5">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#00ADB5]/10">
            <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
            </span>
            <div>
                <h2 class="text-lg font-bold text-[#222831] sm:text-xl">اطلاعات حساب</h2>
                <p class="mt-1 text-xs text-[#393E46]/60">اطلاعات شخصی خود را مدیریت کنید.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <div class="rounded-xl bg-[#F5F6F7] p-4">
                <label class="text-xs text-[#393E46]/60">نام و نام خانوادگی</label>
                <p class="mt-2 text-sm font-bold text-[#222831]">{{ Auth::user()->name }}</p>
            </div>
            <div class="rounded-xl bg-[#F5F6F7] p-4">
                <label class="text-xs text-[#393E46]/60">ایمیل</label>
                <p class="mt-2 break-all text-sm font-bold text-[#222831]">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="mt-7">
            <a href="{{ route('user-edit-profile', ['user' => Auth::user()->id]) }}"
                class="inline-flex items-center gap-2 rounded-lg bg-[#00ADB5] px-6 py-3 text-sm font-bold text-white transition hover:bg-[#008f96]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
                ویرایش اطلاعات
            </a>
        </div>
    </section>

    <!-- cards -->
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <div class="flex items-center justify-between rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm">
            <div class="flex flex-col">
                <span class="text-xs text-[#393E46]/60">تعداد سفارش‌ها</span>
                <span class="mt-2 text-2xl font-bold text-[#222831]">{{ $allOrder }}</span>
            </div>
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#00ADB5]/10 text-[#00ADB5]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm">
            <div class="flex flex-col">
                <span class="text-xs text-[#393E46]/60">سفارش‌های در انتظار</span>
                <span class="mt-2 text-2xl font-bold text-[#222831]">{{ $pendingOrder }}</span>
            </div>
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-100 text-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between rounded-2xl border border-red-100 bg-white p-5 shadow-sm">
            <div class="flex flex-col">
                <span class="text-xs text-[#393E46]/60">علاقه‌مندی‌ها</span>
                <span class="mt-2 text-lg font-bold text-[#222831]">بزودی...</span>
            </div>
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-100 text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm">
            <div class="flex flex-col">
                <span class="text-xs text-[#393E46]/60">آدرس‌های ذخیره شده</span>
                <span class="mt-2 text-2xl font-bold text-[#222831]">{{ $addresses }}</span>
            </div>
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
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
    <div class="grid grid-cols-1 gap-8">

        <!-- lastorders -->
        <section class="rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm sm:p-7">
            <div class="mb-5 flex items-center justify-between border-b border-[#393E46]/10 pb-4">
                <h2 class="flex items-center gap-2 text-lg font-bold text-[#222831]">
                    <img src="{{ 'images/icons/buy.webp' }}" alt="کاربر"class="w-6 h-6 object-cover">
                    آخرین سفارش‌ها
                </h2>
                <a href="{{ route('user-order') }}"
                    class="flex items-center gap-1 text-xs font-bold text-[#00ADB5] transition hover:text-[#008f96]">
                    <span>مشاهده همه سفارش‌ها</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>
            @forelse ($lastOrders as $order)
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-3 rounded-xl bg-[#F5F6F7] p-4 text-sm sm:flex-row sm:items-center sm:justify-between">
                        <div class="flex flex-col gap-1">
                            <span class="font-bold text-[#222831]">{{ $order->order_number }}</span>
                            <span class="text-xs text-[#393E46]/55">{{ $order->created_at->format('d/m/Y') }}</span>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-3 sm:justify-end">
                            <span class="font-bold text-[#222831]">{{ number_format($order->final_price) }}
                                تومان</span>
                            <span class="rounded-full bg-emerald-100 px-2.5 py-1 text-xs text-emerald-700">
                                {{ $order->payment_status }}
                            </span>
                        </div>
                    </div>

                </div>
            @empty
                <span class="flex justify-center rounded-xl bg-[#F5F6F7] px-4 py-8 text-center text-sm text-[#393E46]/55">شما لیست سفارشی ندارید.</span>
            @endforelse

        </section>

        <!-- last address -->
        <section class="rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm sm:p-7">
            <div class="mb-5 flex items-center gap-2 border-b border-[#393E46]/10 pb-4">
                <img src="{{ 'images/icons/address.webp' }}" alt="کاربر"class="w-6 h-6 object-cover">
                <h2 class="text-lg font-bold text-[#222831]">آدرس پیش‌فرض</h2>
            </div>

            @if ($defaultAddress)
                <div class="space-y-3 rounded-xl bg-[#F5F6F7] p-4 text-sm text-[#393E46]/75 leading-7">
                    <p>{{ $defaultAddress->address }}</p>
                    <div class="space-y-1 border-t border-[#393E46]/10 pt-3 text-xs text-[#393E46]/60">
                        <p><span class="font-medium text-[#222831]">کد پستی:</span> {{ $defaultAddress->postal_code ?? '-' }}</p>
                        <p><span class="font-medium text-[#222831]">تلفن:</span> {{ $defaultAddress->phone ?? '-' }}</p>
                    </div>
                </div>
            @else
                <div class="rounded-xl border border-dashed border-[#393E46]/20 bg-[#F5F6F7] py-8 text-center text-sm text-[#393E46]/55">
                    <p>هیچ آدرس پیش‌فرضی ثبت نشده است.</p>
                    <a href="{{ route('user-address-create') }}"
                        class="mt-2 inline-block text-xs font-bold text-[#00ADB5] hover:underline">
                        افزودن آدرس جدید
                    </a>
                </div>
            @endisset

            <div class="mt-6 border-t border-[#393E46]/10 pt-5">
                <a href="{{ route('user-address') }}"
                    class="flex w-full items-center justify-center gap-2 rounded-lg border border-[#00ADB5]/30 px-4 py-3 text-sm font-bold text-[#00ADB5] transition hover:bg-[#00ADB5]/10">
                    <img src="{{ 'images/icons/edit.webp' }}" alt="کاربر"class="w-6 h-6 object-cover">
                    ویرایش آدرس
                </a>
            </div>
        </section>

</div>

</div>

</div>

</main>

@include('layout.footer')
