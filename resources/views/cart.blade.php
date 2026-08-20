@section('title', 'سبد خرید | LaravelShop')
@include('layout.header')

{{-- header --}}
<header
    class="relative flex min-h-[140px] w-full items-center overflow-hidden bg-cover bg-left bg-no-repeat px-4 sm:min-h-[150px] md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundcart.webp') }}');">
    <div class="absolute inset-0 bg-gradient-to-l from-[#F5F6F7] via-[#F5F6F8] to-transparent"></div>
    <div class="relative z-10 mx-auto m-5 flex w-full max-w-7xl items-center justify-start rounded-2xl border-2 border-white p-5">
        <div class="max-w-xl text-right">
            <div class="mb-2 flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#00ADB5]"></span><span class="text-xs font-medium text-[#00ADB5] sm:text-sm">فروشگاه LaravelShop</span></div>
            <h1 class="text-2xl font-bold text-[#222831] sm:text-3xl">سبد خرید</h1>
            <div class="mt-2 ml-auto mr-0 h-[2px] w-16 rounded-full bg-[#00ADB5]"></div>
            <p class="mt-3 hidden max-w-md text-xs leading-7 text-[#393E46] sm:block md:text-base">محصولات انتخابی خود را بررسی و سفارش خود را تکمیل کنید.</p>
        </div>
    </div>
</header>

<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

        <section class="h-fit rounded-2xl border border-[#393E46]/10 bg-white p-4 shadow-sm sm:p-6 lg:col-span-3">
            <div class="mb-5 flex items-center justify-between border-b border-[#393E46]/10 pb-4">
                <h2 class="text-lg font-bold text-[#222831] sm:text-xl">محصولات سبد خرید</h2>
                <span class="text-xs text-[#393E46]/55">{{ count($products) }} محصول</span>
            </div>

            @forelse ($products as $product)
                @php
                    $quantity = $cart[$product->id]['quantity'];
                    $total = $quantity * $product->price;
                @endphp
                <article class="flex flex-col gap-4 border-b border-[#393E46]/10 py-5 last:border-0 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex min-w-0 items-center gap-3 sm:w-2/5 sm:gap-4">
                        <div class="h-20 w-20 shrink-0 overflow-hidden rounded-xl bg-[#F5F6F7] sm:h-24 sm:w-24">
                            <img src="{{ asset('storage/images/products/' . $product->image) }}"
                                alt="{{ $product->name }}" class="w-full h-full object-contain">
                        </div>
                        <div class="min-w-0">
                            <h3 class="line-clamp-2 text-sm font-bold leading-6 text-[#222831] sm:text-base">{{ $product->name }}</h3>
                            <span class="mt-1 inline-block text-xs font-medium text-emerald-600">موجود در انبار</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 text-sm text-[#393E46]/75 sm:block sm:w-1/5 sm:text-center">
                        <span class="text-xs text-[#393E46]/55 sm:hidden">قیمت واحد</span>
                        {{ number_format($product->price) }} تومان
                    </div>
                    <div class="flex items-center justify-between gap-3 sm:w-1/5 sm:justify-center">
                        <span class="text-xs text-[#393E46]/55 sm:hidden">تعداد</span>
                        <form action="{{ route('cart.update', $product) }}" method="POST" class="flex items-center gap-2">

                            @csrf
                            @method('PUT')

                            <input type="number" name="quantity" value="{{ $quantity }}" min="1" max="{{ $product->stock }}"
                                class="h-10 w-16 rounded-lg border border-[#393E46]/20 text-center text-sm outline-none transition focus:border-[#00ADB5] focus:ring-2 focus:ring-[#00ADB5]/20">

                            <button type="submit"
                                class="h-10 rounded-lg bg-[#00ADB5] px-3 text-xs font-bold text-white transition hover:bg-[#008f96]">
                                بروزرسانی
                            </button>
                        </form>
                    </div>
                    <div class="flex items-center justify-between gap-3 sm:w-1/5 sm:flex-col sm:items-center">
                        <span class="text-xs text-[#393E46]/55 sm:hidden">قیمت کل</span>
                        <span class="text-sm font-bold text-[#00ADB5]">{{ number_format($total) }} تومان</span>

                        <form action="{{ route('cart.destroy', ['product' => $product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-red-200 transition hover:bg-red-50">
                                <img class="w-4 h-4" src="{{ asset('images/icons/delete.webp') }}" alt="حذف">
                            </button>
                        </form>
                    </div>
                </article>
            @empty
                <div class="rounded-xl bg-[#F5F6F7] px-5 py-16 text-center text-sm text-[#393E46]/60">سبد خرید شما خالی است.</div>
            @endforelse

        </section>

        <aside class="h-fit rounded-2xl border border-[#393E46]/10 bg-white p-5 shadow-sm lg:col-span-1 lg:sticky lg:top-24">
            <h3 class="mb-5 flex items-center gap-2 text-lg font-bold text-[#222831]">
                <img class="h-6 w-6 rounded-md" src="{{ asset('images/icons/order.webp') }}" alt="">
                خلاصه سفارش
            </h3>

            <div class="space-y-3 text-sm">
                <div class="flex justify-between text-[#393E46]/70">
                    <span>جمع کل کالاها</span>
                    <span>{{ number_format($cartTotal) }} تومان</span>
                </div>
                <div class="flex justify-between text-emerald-600">
                    <span>تخفیف</span>
                    <span>-0 تومان</span>
                </div>
                <div class="flex justify-between text-emerald-600">
                    <span>هزینه ارسال</span>
                    <span>رایگان</span>
                </div>
            </div>

            <div class="mt-4 border-t border-[#393E46]/10 pt-4">
                <div class="flex justify-between text-lg font-bold text-[#222831]">
                    <span>مبلغ قابل پرداخت</span>
                    <span>{{ number_format($cartTotal) }} تومان</span>
                </div>
            </div>

            <div class="mt-6">
                <div class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 p-3 text-center text-xs text-emerald-700">
                    شما واجد شرایط ارسال رایگان هستید!
                </div>
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="کد تخفیف را وارد کنید"
                        class="w-2/3 flex-1 rounded-lg border border-[#393E46]/20 px-3 py-2 text-xs outline-none focus:border-[#00ADB5] focus:ring-2 focus:ring-[#00ADB5]/20">
                    <button
                        class="rounded-lg bg-[#00ADB5]/10 px-4 py-2 text-sm font-bold text-[#00ADB5] transition hover:bg-[#00ADB5] hover:text-white">اعمال</button>
                </div>
            </div>

            <div
                class="mt-4 w-full rounded-lg bg-[#00ADB5] py-3 text-center font-bold text-white shadow-sm transition hover:bg-[#008f96]">
                <a href="{{ route('checkout') }}">
                    ادامه فرایند خرید
                </a>
            </div>


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

    {{-- بخش ویژگی‌ها (پایین صفحه) --}}
    <div class="mt-8 grid grid-cols-2 gap-4 md:grid-cols-4">
        <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-[#393E46]/10 bg-white p-4 text-center shadow-sm">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#00ADB5]/10">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/safe.webp') }}" alt="">
            </div>
            <span class="text-sm font-bold text-[#222831]">پرداخت امن</span>
            <span class="text-xs text-[#393E46]/60">با درگاه‌های معتبر بانکی</span>
        </div>
        <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-[#393E46]/10 bg-white p-4 text-center shadow-sm">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#00ADB5]/10">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/24h.webp') }}" alt="">
            </div>
            <span class="text-sm font-bold text-[#222831]">پشتیبانی ۲۴/۷</span>
            <span class="text-xs text-[#393E46]/60">پاسخگویی شما در تمام لحظات</span>
        </div>
        <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-[#393E46]/10 bg-white p-4 text-center shadow-sm">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#00ADB5]/10">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/garanti.webp') }}" alt="">
            </div>
            <span class="text-sm font-bold text-[#222831]">ضمانت اصالت کالا</span>
            <span class="text-xs text-[#393E46]/60">کالاهای اورجینال با ضمانت بازگشت</span>
        </div>
        <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-[#393E46]/10 bg-white p-4 text-center shadow-sm">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#00ADB5]/10">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/send.webp') }}" alt="">
            </div>
            <span class="text-sm font-bold text-[#222831]">ارسال رایگان</span>
            <span class="text-xs text-[#393E46]/60">برای سفارش‌های بالای ۳ میلیون تومان</span>
        </div>
    </div>

</main>

@include('layout.footer')
