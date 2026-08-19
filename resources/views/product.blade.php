@include('layout.header')

<main class="bg-gray-50 max-w-7xl mx-auto px-4 py-8 flex flex-col">
    <div class="flex flex-col md:flex-row gap-3 md:gap-10">

        <div
            class="w-full md:w-1/2 flex flex-col gap-4 border-2 border-gray-200 rounded-2xl p-6 md:p-8 bg-gray-50 shadow-lg">

            <div>
                <h1 class="font-bold text-2xl md:text-3xl text-gray-800 pb-2">{{ $product->name }}</h1>
                <p class="text-blue-600 font-bold text-2xl">
                    {{ number_format($product->price) }} <span class="text-sm text-gray-400 font-normal">تومان</span>
                </p>
                <p class="text-sm text-gray-500 mt-4 leading-relaxed">
                    {{ $product->description }}
                </p>
            </div>

            <div class="border-t-2 border-gray-200 pt-5">
                <div class="flex flex-wrap items-center gap-3">
                    <form action="{{ route('cart.store') }}" method="POST" class="flex flex-1 items-center gap-3">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <input type="number" name="quantity" value="1" min="1"
                            class="w-16 h-10 text-center border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-gray-600 transition">

                        <button type="submit"
                            class="flex-1 flex items-center justify-center gap-2 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2.5 px-4 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg cursor-pointer">
                            <img class="w-5 h-5 object-contain filter brightness-0 invert"
                                src="{{ asset('images/icons/buy.webp') }}" alt="افزودن به سبد خرید">
                            <span>افزودن به سبد خرید</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <div
            class="w-full md:w-1/2 flex items-center justify-center border-2 border-gray-200 rounded-2xl p-4 bg-gray-50">
            <img class="w-full h-64 md:h-80 object-contain rounded-xl"
                src="{{ asset('storage/images/products/' . $product->image) }}" alt="ساعت هوشمند شیائومی">
        </div>

    </div>

    <div class="mt-8">
        <h class="font-bold p-7 mb-4">محصولات مرتبط</h>

        @if ($relatedProducts->isNotEmpty())
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mt-4">
                @foreach ($relatedProducts as $related)
                    <div
                        class="flex flex-col bg-white rounded-2xl shadow-md hover:shadow-xl hover:scale-105 p-3 border border-gray-200 transition-all duration-300 group">
                        {{-- تصویر محصول --}}
                        <div class="w-full h-40 overflow-hidden rounded-lg relative">
                            <img class="w-full h-full object-contain p-2 group-hover:scale-110 transition-transform duration-300"
                                src="{{ asset('storage/images/products/' . $related->image) }}"
                                alt="{{ $related->name }}">
                        </div>

                        {{-- نام محصول --}}
                        <h2 class="font-bold text-lg text-gray-800 mt-3 text-center line-clamp-1">
                            {{ $related->name }}
                        </h2>

                        {{-- قیمت محصول --}}
                        <p class="text-blue-600 font-bold text-xl mt-1 text-center">
                            {{ number_format($related->price) }} <span
                                class="text-sm text-gray-500 font-normal">تومان</span>
                        </p>

                        {{-- لینک مشاهده محصول --}}
                        <a href="{{ route('product-show', $related->id) }}"
                            class="block mt-2 text-center text-xs text-blue-500 hover:underline">
                            مشاهده جزئیات
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center text-gray-500 py-8 border border-dashed border-gray-300 rounded-xl bg-gray-50 mt-4">
                <p>هیچ محصول مرتبطی با این دسته‌بندی پیدا نشد.</p>
            </div>
        @endif

    </div>
</main>

@include('layout.footer')
