@section('title', 'تکمیل سفارش | LaravelShop')
@include('layout.header')

<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">
    <div class="mb-7 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <span class="text-xs font-semibold text-[#00ADB5]">مرحله نهایی خرید</span>
            <h1 class="mt-1 text-2xl font-bold text-[#222831] sm:text-3xl">تکمیل سفارش</h1>
        </div>
        <a href="{{ route('cart') }}" class="inline-flex items-center gap-2 text-sm font-medium text-[#00ADB5] transition hover:text-[#008f96]">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            بازگشت به سبد خرید
        </a>
    </div>

    {{-- main form --}}
    <form action="{{ route('checkout.store') }}" method="POST" class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        @csrf

        {{-- leftcol-address --}}
        <div class="lg:col-span-2">

            <section class="rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm sm:p-6">
                <div class="mb-5 flex items-center justify-between border-b border-[#393E46]/10 pb-4">
                    <h2 class="flex items-center gap-2 text-lg font-bold text-[#222831]">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#00ADB5]/10"><img class="h-5 w-5" src="{{ asset('images/icons/location.webp') }}" alt=""></span>
                    انتخاب آدرس ارسال
                    </h2>
                    <span class="text-xs text-[#393E46]/55">مرحله ۱ از ۱</span>
                </div>

                @forelse ($addresses as $address)
                    <label
                        class="group mb-3 block cursor-pointer rounded-xl border-2 bg-[#F5F6F7] p-4 transition hover:border-[#00ADB5] {{ $address->is_default ? 'border-[#00ADB5] bg-[#00ADB5]/5' : 'border-transparent' }}">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="address_id" value="{{ $address->id }}"
                                {{ $address->is_default ? 'checked' : '' }}
                                class="h-5 w-5 border-[#393E46]/30 text-[#00ADB5] focus:ring-[#00ADB5]">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-[#222831]">
                                        {{ $address->title ?? 'آدرس' }}
                                        @if ($address->is_default)
                                            <span class="ml-2 rounded-full bg-emerald-100 px-2 py-0.5 text-xs text-emerald-700">پیش‌فرض</span>
                                        @endif
                                    </span>
                                </div>
                                <div class="mt-1 text-sm text-[#393E46]/75">
                                    {{ $address->full_name }} &bull; {{ $address->phone }}
                                </div>
                                <div class="mt-1 text-sm leading-7 text-[#393E46]/60">
                                    {{ $address->province }}، {{ $address->city }}، {{ $address->address }}
                                </div>
                            </div>
                        </div>
                    </label>
                @empty
                    <div class="rounded-xl border border-dashed border-[#393E46]/20 bg-[#F5F6F7] p-8 text-center">
                        <p class="mb-3 text-sm text-[#393E46]/65">هنوز آدرسی ثبت نکرده‌اید.</p>
                        <a href="{{ route('user-address-create') }}"
                            class="inline-block rounded-lg bg-[#00ADB5] px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#008f96]">
                            افزودن آدرس جدید
                        </a>
                    </div>
                @endforelse
            </section>

        </div>

        {{-- rightcol -payment info --}}
        <div class="lg:col-span-1">

            <aside class="sticky top-24 rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm sm:p-6">
                <h2 class="mb-5 flex items-center gap-2 border-b border-[#393E46]/10 pb-4 text-lg font-bold text-[#222831]">
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#00ADB5]/10"><img class="h-5 w-5" src="{{ asset('images/icons/order.webp') }}" alt=""></span>
                    خلاصه سفارش
                </h2>

                <div class="mb-4 space-y-3 border-b border-[#393E46]/10 pb-4">
                    @foreach ($products as $product)
                        @php
                            $quantity = $cart[$product->id]['quantity'];
                        @endphp
                        <div class="flex justify-between gap-4 text-sm">
                            <span class="text-[#393E46]/75">
                                {{ $product->name }}
                                <span class="text-gray-400 text-xs">×{{ $quantity }}</span>
                            </span>
                            <span class="font-medium text-[#222831]">
                                {{ number_format($product->price * $quantity) }}
                                تومان
                            </span>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between text-lg font-bold text-[#222831]">
                    <span>مبلغ نهایی</span>
                    <span>{{ number_format($cartTotal) }} تومان</span>
                </div>

                <button type="submit"
                    class="mt-6 flex w-full items-center justify-center gap-2 rounded-lg bg-[#00ADB5] px-4 py-3 font-bold text-white shadow-sm transition hover:bg-[#008f96] hover:shadow-md">
                    <img class="h-5 w-5 brightness-0 invert" src="{{ asset('images/icons/buy.webp') }}" alt="">
                    پرداخت و تکمیل سفارش
                </button>

                <div class="mt-4 flex items-center justify-center gap-1 text-xs text-[#393E46]/50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <span>پرداخت امن و اطلاعات شما محفوظ است.</span>
                </div>
            </aside>

        </div>

    </form>

</main>

@include('layout.footer')
