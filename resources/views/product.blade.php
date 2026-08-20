@section('title', $product->name . ' | LaravelShop')
@include('layout.header')

<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">
    <a href="{{ route('products') }}"
        class="mb-5 inline-flex items-center gap-2 text-sm font-medium text-[#00ADB5] transition hover:text-[#008f96]">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
        بازگشت به محصولات
    </a>

    <section class="overflow-hidden rounded-2xl border border-[#393E46]/10 bg-white shadow-sm">
        <div class="grid items-stretch lg:grid-cols-2">
            <div
                class="relative flex min-h-[300px] items-center justify-center overflow-hidden bg-[#EEEEEE] p-6 sm:min-h-[440px] sm:p-10 lg:order-2">
                @if ($product->discount > 0)
                    <span
                        class="absolute right-5 top-5 z-10 rounded-full bg-red-500 px-3 py-1.5 text-xs font-bold text-white">
                        {{ $product->discount }}٪ تخفیف
                    </span>
                @endif
                <img class="h-full max-h-[420px] w-full object-contain transition duration-500 hover:scale-105"
                    src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{ $product->name }}">
            </div>

            <div class="flex flex-col justify-center p-5 text-right sm:p-8 lg:order-1 lg:p-10">
                <span class="mb-4 w-fit rounded-full bg-[#00ADB5]/10 px-3 py-1 text-xs font-semibold text-[#00ADB5]">
                    جزئیات محصول
                </span>
                <h1 class="text-2xl font-bold leading-9 text-[#222831] sm:text-3xl">{{ $product->name }}</h1>

                <div class="mt-5 flex items-baseline gap-2">
                    <span
                        class="text-2xl font-bold text-[#00ADB5] sm:text-3xl">{{ number_format($product->price) }}</span>
                    <span class="text-sm text-[#393E46]/60">تومان</span>
                </div>

                <p class="mt-5 text-sm leading-8 text-[#393E46]/75 sm:text-base sm:leading-9">
                    {{ $product->description }}
                </p>

                <div class="mt-6 flex items-center gap-2 border-t border-[#393E46]/10 pt-5 text-sm">
                    <span
                        class="h-2.5 w-2.5 rounded-full {{ $product->stock > 0 ? 'bg-emerald-500' : 'bg-red-500' }}"></span>
                    <span class="text-[#393E46]/75">
                        {{ $product->stock > 0 ? 'موجود در انبار' : 'ناموجود' }}
                    </span>
                </div>

                @if ($product->stock > 0)
                    <form action="{{ route('cart.store') }}" method="POST"
                        class="mt-6 flex flex-col gap-3 sm:flex-row">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <label class="sr-only" for="quantity">تعداد</label>
                        <input id="quantity" type="number" name="quantity" value="1" min="1"
                            max="{{ $product->stock }}"
                            class="h-12 w-full rounded-lg border border-[#393E46]/20 bg-white px-3 text-center text-[#222831] outline-none transition focus:border-[#00ADB5] focus:ring-2 focus:ring-[#00ADB5]/20 sm:w-20">
                        <button type="submit"
                            class="flex h-12 flex-1 items-center justify-center gap-2 rounded-lg bg-[#00ADB5] px-4 text-sm font-bold text-white shadow-sm transition hover:bg-[#008f96] hover:shadow-md">
                            <img class="h-5 w-5 object-contain brightness-0 invert"
                                src="{{ asset('images/icons/buy.webp') }}" alt="">
                            افزودن به سبد خرید
                        </button>
                    </form>
                @else
                    <div class="mt-6 rounded-lg bg-red-50 px-4 py-3 text-center text-sm font-medium text-red-600">
                        این محصول در حال حاضر موجود نیست.
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="mt-10" aria-labelledby="related-products-title">
        <div class="mb-5 flex items-center gap-4">
            <h2 id="related-products-title" class="shrink-0 text-xl font-bold text-[#222831] sm:text-2xl">محصولات مرتبط
            </h2>
            <span class="h-px flex-1 bg-[#00ADB5]/20"></span>
        </div>

        @if ($relatedProducts->isNotEmpty())
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                @foreach ($relatedProducts as $related)
                    <article
                        class="group overflow-hidden rounded-2xl border border-[#393E46]/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="aspect-square overflow-hidden bg-[#EEEEEE]">
                            <img class="h-full w-full object-contain p-4 transition duration-500 group-hover:scale-105"
                                src="{{ asset('storage/images/products/' . $related->image) }}"
                                alt="{{ $related->name }}">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="line-clamp-1 text-sm font-bold text-[#222831] sm:text-base">{{ $related->name }}
                            </h3>
                            <p class="mt-2 text-base font-bold text-[#00ADB5]">{{ number_format($related->price) }}
                                <span class="text-xs font-normal text-[#393E46]/60">تومان</span></p>
                            <a href="{{ route('product-show', $related->id) }}"
                                class="mt-3 inline-flex text-xs font-bold text-[#00ADB5] transition hover:text-[#008f96]">مشاهده
                                جزئیات</a>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div
                class="rounded-2xl border border-dashed border-[#393E46]/20 bg-white py-10 text-center text-sm text-[#393E46]/60">
                محصول مرتبطی با این دسته‌بندی پیدا نشد.
            </div>
        @endif
    </section>
</main>

@include('layout.footer')
