@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-32 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundcart.webp') }}');">
    <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">سبد خرید</h1>
</header>

<main class="container mx-auto max-w-7xl px-4 py-8">

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

        <div class="lg:col-span-3 bg-white rounded-xl shadow-sm p-6 h-fit">

            <div class="grid grid-cols-12 gap-4 pb-4 border-b border-gray-200 text-sm text-gray-500 font-medium">
                <div class="col-span-5 text-right">محصول</div>
                <div class="col-span-2 text-center">قیمت واحد</div>
                <div class="col-span-3 text-center">تعداد</div>
                <div class="col-span-2 text-center">قیمت کل</div>
            </div>

            @forelse ($products as $product)
                @php
                    $quantity = $cart[$product->id]['quantity'];
                    $total = $quantity * $product->price;
                @endphp
                <div class="grid grid-cols-12 gap-4 py-6 border-b border-gray-100 items-center">
                    <div class="col-span-5 flex items-center gap-4">
                        <div
                            class="w-16 h-16 bg-gray-100 rounded-lg flex-shrink-0 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/images/products/' . $product->image) }}"
                                alt="{{ $product->name }}" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-900"> {{ $product->name }} </h3>
                            <span
                                class="text-xs text-green-600 font-medium mt-1 inline-block">{{ $product->stock }}</span>
                        </div>
                    </div>
                    <div class="col-span-2 text-center text-gray-900 text-sm">
                        {{ number_format($product->price) }} تومان
                    </div>
                    <div class="col-span-3 flex justify-center">
                        <form action="{{ route('cart.update', $product) }}" method="POST"
                            class="flex items-center gap-2">

                            @csrf
                            @method('PUT')

                            <input type="number" name="quantity" value="{{ $quantity }}" min="1"
                                class="w-14 h-8 text-center border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-600 transition">

                            <button type="submit"
                                class="h-8 px-3 bg-gray-600 hover:bg-gray-700 text-white text-xs rounded-lg transition shadow-sm">
                                بروزرسانی
                            </button>
                        </form>
                    </div>
                    <div class="col-span-2 text-center flex flex-col items-center gap-3">
                        <span class="text-gray-900 font-bold text-sm"> {{ number_format($total) }} تومان</span>

                        <form action="{{ route('cart.destroy', ['product' => $product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-8 h-8 flex items-center justify-center border border-red-200 rounded-lg hover:bg-red-50 transition">
                                <img class="w-4 h-4" src="{{ asset('images/icons/delete.webp') }}" alt="حذف">
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="flex justify-center m-20 text-gray-500">سبد خرید شما خالی است</p>
            @endforelse

        </div>

        <div class="lg:col-span-1 bg-white rounded-xl shadow-sm p-6 h-fit">
            <h3 class="text-lg font-bold mb-4 flex items-center gap-2 text-gray-900">
                <img class="rounded-md border-gray-400 w-6 h-6" src="{{ 'images/icons/order.webp' }}" alt="a">
                خلاصه سفارش
            </h3>

            <div class="space-y-3 text-sm">
                <div class="flex justify-between text-gray-600">
                    <span>جمع کل کالاها</span>
                    <span>{{ number_format($cartTotal) }} تومان</span>
                </div>
                <div class="flex justify-between text-green-600">
                    <span>تخفیف</span>
                    <span>-0 تومان</span>
                </div>
                <div class="flex justify-between text-green-600">
                    <span>هزینه ارسال</span>
                    <span>رایگان</span>
                </div>
            </div>

            <div class="border-t border-gray-200 mt-4 pt-4">
                <div class="flex justify-between text-lg font-bold text-gray-900">
                    <span>مبلغ قابل پرداخت</span>
                    <span>{{ number_format($cartTotal) }} تومان</span>
                </div>
            </div>

            <div class="mt-6">
                <div class="bg-green-50 border border-green-200 rounded-lg p-3 text-xs text-green-700 text-center mb-4">
                    شما واجد شرایط ارسال رایگان هستید!
                </div>
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="کد تخفیف را وارد کنید"
                        class="flex-1 w-2/3 border border-gray-200 rounded-lg px-3 py-2 text-[12px] focus:outline-none focus:ring-2 focus:ring-gray-600">
                    <button
                        class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm transition">اعمال</button>
                </div>
            </div>

            <div
                class="w-full bg-gray-600 hover:bg-gray-700 text-white font-bold py-3 rounded-lg mt-4 transition text-center shadow-sm">
                <a href="{{ route('checkout') }}">
                    ادامه فرایند خرید
                </a>
            </div>


            <div class="mt-4 flex items-center justify-center gap-1 text-xs text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <span>پرداخت امن و اطلاعات شما محفوظ است.</span>
            </div>
        </div>

    </div>

    {{-- بخش ویژگی‌ها (پایین صفحه) --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center justify-center text-center gap-3">
            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/safe.webp') }}" alt="">
            </div>
            <span class="font-bold text-sm text-gray-800">پرداخت امن</span>
            <span class="text-xs text-gray-500">با درگاه‌های معتبر بانکی</span>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center justify-center text-center gap-3">
            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/24h.webp') }}" alt="">
            </div>
            <span class="font-bold text-sm text-gray-800">پشتیبانی ۲۴/۷</span>
            <span class="text-xs text-gray-500">پاسخگویی شما در تمام لحظات</span>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center justify-center text-center gap-3">
            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/garanti.webp') }}" alt="">
            </div>
            <span class="font-bold text-sm text-gray-800">ضمانت اصالت کالا</span>
            <span class="text-xs text-gray-500">کالاهای اورجینال با ضمانت بازگشت</span>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center justify-center text-center gap-3">
            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                <img class="w-5 h-5 object-contain" src="{{ asset('images/icons/send.webp') }}" alt="">
            </div>
            <span class="font-bold text-sm text-gray-800">ارسال رایگان</span>
            <span class="text-xs text-gray-500">برای سفارش‌های بالای ۳ میلیون تومان</span>
        </div>
    </div>

</main>

@include('layout.footer')
