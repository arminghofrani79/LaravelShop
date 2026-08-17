@include('layout.header')

<main>
    <header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
        style="background-image: url('{{ asset('images/banners/backgroundproduct.png') }}');">
        <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">محصولات</h1>
    </header>

    <div class="flex flex-col md:flex-row gap-6 px-4 md:px-8 py-6">
        {{-- sidebar --}}
        <aside class="w-full md:w-72 flex-shrink-0 space-y-6">
            <div class="flex flex-col gap-2 p-4 bg-white rounded-xl shadow-md border border-gray-200">
                <h2 class="font-bold text-lg text-gray-800 border-b border-gray-200 pb-2 mb-1">دسته‌بندی محصولات</h2>
                @foreach ($categories as $category)
                    <a href="{{ route('products', ['category' => $category->id]) }}"
                        class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition-colors">
                        <img class="rounded-md w-6 h-6 object-contain" src="{{ asset('images/icons/watch.png') }}"
                            alt="ساعت ">
                        <span class="text-sm text-gray-700">{{ $category->name }}</span>
                    </a>
                @endforeach

            </div>

            <div class="flex flex-col gap-2 p-4 bg-white rounded-xl shadow-md border border-gray-200 gap-2">
                <form action="{{ route('products') }}" method="GET">

                    <h2 class="font-bold text-lg text-gray-800 border-b border-gray-200 pb-2 mb-1">
                        محدوده قیمت
                    </h2>

                    {{-- search --}}
                    @if (request('search'))
                        <input type="hidden" name="search" value="{{ request('search') }}">
                    @endif

                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <div class="flex items-center gap-2">
                        <input type="number" name="min_price" placeholder="از" value="{{ request('min_price') }}"
                            class="w-full p-2 border border-gray-300 rounded-lg text-sm">

                        <span class="text-gray-400">-</span>

                        <input type="number" name="max_price" placeholder="تا" value="{{ request('max_price') }}"
                            class="w-full p-2 border border-gray-300 rounded-lg text-sm">
                    </div>

                    <button type="submit"
                        class="w-full bg-gray-600 hover:bg-gray-700 text-white text-sm font-bold py-2 rounded-lg transition-colors">
                        اعمال فیلتر
                    </button>
                </form>
            </div>

            <form action="{{ route('products') }}" method="GET"
                class="flex flex-col gap-2 p-4 bg-white rounded-xl shadow-md border border-gray-200">

                @if (request('search'))
                    <input type="hidden" name="search" value="{{ request('search') }}">
                @endif

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('min_price'))
                    <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                @endif

                @if (request('max_price'))
                    <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                @endif

                <h2 class="font-bold text-lg text-gray-800 border-b border-gray-200 pb-2 mb-1">
                    وضعیت موجودی
                </h2>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="in_stock" value="1"
                     {{ request('in_stock') ? 'checked' : '' }}>

                    <span class="text-sm text-gray-700">
                        فقط محصولات موجود
                    </span>
                </label>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="discounted" value="1"
                        {{ request('discounted') ? 'checked' : '' }}>

                    <span class="text-sm text-gray-700">
                        محصولات با تخفیف
                    </span>
                </label>

                <button type="submit"
                    class="w-full bg-gray-600 hover:bg-gray-700 text-white text-sm font-bold py-2 rounded-lg">
                    اعمال فیلتر
                </button>
            </form>

        </aside>

        {{-- products section --}}
        <div class="flex-1">

            {{-- products grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <a href="{{ route('product-show', ['product' => $product->id]) }}"
                        class="block transform transition-all duration-300 hover:scale-105 cursor-pointer">

                        <div
                            class="flex flex-col bg-white rounded-2xl shadow-md hover:shadow-xl p-3 border border-gray-200 transition-all duration-300 h-full">

                            <div class="relative w-full h-56 overflow-hidden rounded-lg">
                                <img class="w-full h-full object-contain p-2"
                                    src="{{ asset('storage/images/products/' . $product->image) }}"
                                    alt="{{ $product->name }}">

                                @if ($product->discount > 0)
                                    <div
                                        class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-lg z-10">
                                        {{ $product->discount }}٪ تخفیف
                                    </div>
                                @endif
                            </div>

                            <h2 class="font-bold text-lg text-gray-800 mt-3 text-center line-clamp-1">
                                {{ $product->name }}
                            </h2>

                            <p class="text-blue-600 font-bold text-xl mt-1 text-center">
                                {{ number_format($product->price) }}
                                <span class="text-sm text-gray-500 font-normal">تومان</span>
                            </p>

                            <button
                                class="flex items-center justify-center gap-2 w-full bg-gray-600 hover:bg-gray-700 text-white font-bold py-2.5 px-4 rounded-lg transition-all duration-200 mt-3 shadow-md hover:shadow-lg">
                                <img class="w-5 h-5 object-contain filter brightness-0 invert"
                                    src="{{ asset('images/icons/buy.png') }}" alt="افزودن به سبد خرید">

                                افزودن به سبد خرید
                            </button>

                        </div>
                    </a>
                @endforeach
            </div>

            {{-- pagination --}}
            <div class="mt-8">
                {{ $products->links() }}
            </div>

        </div>

    </div>
</main>

@include('layout.footer')
