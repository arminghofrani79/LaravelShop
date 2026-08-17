@include('layout.header')

<main class="container mx-auto max-w-7xl px-4 py-8">

    {{-- header --}}
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">تکمیل سفارش</h1>
        <a href="{{ route('cart') }}" class="text-sm text-gray-500 hover:text-gray-700 underline">
            بازگشت به سبد خرید
        </a>
    </div>

    {{-- main form --}}
    <form action="{{ route('checkout.store') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        @csrf

        {{-- leftcol-address --}}
        <div class="lg:col-span-2">

            <div class="bg-white rounded-xl shadow-sm p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/location.png') }}" alt="">
                    انتخاب آدرس ارسال
                </h2>

                @forelse ($addresses as $address)
                    <label
                        class="block bg-gray-50 border-2 rounded-xl p-4 mb-3 cursor-pointer transition hover:border-blue-500 {{ $address->is_default ? 'border-blue-500' : 'border-gray-200' }}">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="address_id" value="{{ $address->id }}"
                                {{ $address->is_default ? 'checked' : '' }}
                                class="w-5 h-5 text-blue-600 focus:ring-blue-500">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-gray-800">
                                        {{ $address->title ?? 'آدرس' }}
                                        @if ($address->is_default)
                                            <span
                                                class="ml-2 text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded-full">پیش‌فرض</span>
                                        @endif
                                    </span>
                                </div>
                                <div class="text-sm text-gray-600 mt-1">
                                    {{ $address->full_name }} &bull; {{ $address->phone }}
                                </div>
                                <div class="text-sm text-gray-500 mt-1">
                                    {{ $address->province }}، {{ $address->city }}، {{ $address->address }}
                                </div>
                            </div>
                        </div>
                    </label>
                @empty
                    <div class="bg-white rounded-xl p-6 text-center border border-dashed border-gray-300">
                        <p class="text-gray-500 mb-3">هنوز آدرسی ثبت نکرده‌اید.</p>
                        <a href="{{ route('user-address-create') }}"
                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-sm transition">
                            افزودن آدرس جدید
                        </a>
                    </div>
                @endforelse
            </div>

        </div>

        {{-- rightcol -payment info --}}
        <div class="lg:col-span-1">

            <div class="bg-white rounded-xl shadow-sm p-6 sticky top-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/order.png') }}" alt="">
                    خلاصه سفارش
                </h2>

                <div class="space-y-3 border-b border-gray-200 pb-4 mb-4">
                    @foreach ($products as $product)
                        @php
                            $quantity = $cart[$product->id]['quantity'];
                        @endphp
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-700">
                                {{ $product->name }}
                                <span class="text-gray-400 text-xs">×{{ $quantity }}</span>
                            </span>
                            <span class="font-medium text-gray-800">
                                {{ number_format($product->price * $quantity) }}
                                تومان
                            </span>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between text-lg font-bold text-gray-900">
                    <span>مبلغ نهایی</span>
                    <span>{{ number_format($cartTotal) }} تومان</span>
                </div>

                <button type="submit"
                    class="w-full bg-gray-700 hover:bg-gray-800 text-white font-bold py-3 px-4 rounded-lg mt-6 transition shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/buy.png') }}" alt="">
                    پرداخت و تکمیل سفارش
                </button>

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

    </form>

</main>

@include('layout.footer')
