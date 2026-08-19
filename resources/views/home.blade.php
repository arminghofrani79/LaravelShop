@include('layout.header')

<main class="w-full bg-[#EEEEEE]">

    {{-- Hero Banner --}}
    <div class="hero-banner isolate relative h-[230px] w-full overflow-hidden sm:h-[340px] lg:h-[500px]">
        {{-- اسلایدها --}}
        <a href="{{ route('products') }}" class="cursor-pointer">
            <div
                class="banner-slide object-center absolute inset-0 h-full w-full object-cover opacity-100 transition-opacity duration-700">
                <img src="{{ asset('images/banners/banner1.webp') }}" class="hero-banner-image h-full w-full object-cover"
                    alt="بنر ۱">
            </div>
            <div
                class="banner-slide object-center absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-700">
                <img src="{{ asset('images/banners/banner2.webp') }}"
                    class="hero-banner-image h-full w-full object-cover" alt="بنر ۲">
            </div>
            <div
                class="banner-slide object-center absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-700">
                <img src="{{ asset('images/banners/banner3.webp') }}"
                    class="hero-banner-image h-full w-full object-cover" alt="بنر ۳">
            </div>
        </a>


        {{-- دکمه‌های قبلی/بعدی --}}
        <button id="prevBanner"
            class="absolute left-2 top-1/2 z-10 -translate-y-1/2 rounded-full bg-[#393E46]/90 p-1.5 text-[#EEEEEE] shadow-md transition hover:bg-[#00ADB5] sm:left-4 sm:p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="nextBanner"
            class="absolute right-2 top-1/2 z-10 -translate-y-1/2 rounded-full bg-[#393E46]/90 p-1.5 text-[#EEEEEE] shadow-md transition hover:bg-[#00ADB5] sm:right-4 sm:p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    {{-- Benefits Section --}}
    <section class="bg-[#EEEEEE] px-4 py-6 sm:py-8">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:gap-4 lg:grid-cols-4">
                <div
                    class="flex items-center gap-5 rounded-xl bg-[#393E46] p-1 transition-all duration-200 hover:-translate-y-1 hover:bg-[#393E46]/90 cursor-default border-[#393E46]">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/15">
                        <img class="bg-[#00ADB5] rounded-2xl h-10 w-10 object-contain"
                            src="{{ asset('images/icons/send.webp') }}" alt="ارسال سریع">
                    </span>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-sm font-bold text-[#EEEEEE]">ارسال سریع</span>
                        <p class="text-xs text-[#EEEEEE]/70">ارسال به سراسر کشور</p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-5 rounded-xl bg-[#393E46] p-1 transition-all duration-200 hover:-translate-y-1 hover:bg-[#393E46]/90 cursor-default">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/15">
                        <img class="bg-[#00ADB5] rounded-2xl h-10 w-10 object-contain"
                            src="{{ asset('images/icons/garanti.webp') }}" alt="ضمانت کیفیت">
                    </span>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-sm font-bold text-[#EEEEEE]">ضمانت کیفیت</span>
                        <p class="text-xs text-[#EEEEEE]/70">گارانتی ۲۴ ماهه</p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-5 rounded-xl bg-[#393E46] p-1 transition-all duration-200 hover:-translate-y-1 hover:bg-[#393E46]/90 cursor-default">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/15">
                        <img class="bg-[#00ADB5] rounded-2xl h-10 w-10 object-contain"
                            src="{{ asset('images/icons/support.webp') }}" alt="پشتیبانی">
                    </span>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-sm font-bold text-[#EEEEEE]">پشتیبانی حرفه‌ای</span>
                        <p class="text-xs text-[#EEEEEE]/70">پاسخگوی شما هستیم</p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-5 rounded-xl bg-[#393E46] p-1 transition-all duration-200 hover:-translate-y-1 hover:bg-[#393E46]/90 cursor-default">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/15">
                        <img class="bg-[#00ADB5] rounded-2xl h-10 w-10 object-contain"
                            src="{{ asset('images/icons/credit.webp') }}" alt="پرداخت امن">
                    </span>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-sm font-bold text-[#EEEEEE]">پرداخت امن</span>
                        <p class="text-xs text-[#EEEEEE]/70">پرداخت اینترنتی امن</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Categories Section --}}
    <section class="mx-auto max-w-7xl px-4 py-8 sm:py-10">

        {{-- Header --}}
        <div class="mb-5 flex items-center justify-between sm:mb-7">
            <h2 class="border-b-2 border-[#00ADB5] pb-2 text-xl font-bold text-[#222831] sm:text-2xl">
                دسته‌بندی‌های محبوب
            </h2>

            <a href="{{ route('products') }}"
                class="group flex items-center gap-1 text-sm font-medium text-[#00ADB5] transition hover:text-[#393E46]">

                مشاهده دسته‌بندی‌ها

                <svg class="h-4 w-4 rotate-180 transition-transform group-hover:-translate-x-1" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>


        @php
            $randomImages = [
                asset('images/categories/image1.webp'),
                asset('images/categories/image2.webp'),
                asset('images/categories/image3.webp'),
                asset('images/categories/image4.webp'),
            ];
        @endphp


        {{-- Categories --}}
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

            @foreach ($categories as $category)
                <a href="{{ route('products') }}"
                    class="group overflow-hidden rounded-2xl border border-[#393E46]/15 bg-gray-50
                       shadow-sm transition-all duration-300
                       hover:-translate-y-1
                       hover:border-[#00ADB5]/40
                       hover:shadow-xl">

                    {{-- Image --}}
                    <div class="aspect-[4/3] w-full overflow-hidden bg-[#EEEEEE]">

                        <img src="{{ $randomImages[$loop->index % 4] }}" alt="{{ $category->name }}" loading="lazy"
                            class="h-full w-full object-cover
                               transition-transform duration-500
                               group-hover:scale-105">
                    </div>


                    {{-- Content --}}
                    <div class="p-4">

                        <h3 class="mb-2 text-base font-bold text-[#222831] sm:text-lg">
                            {{ $category->name }}
                        </h3>

                        <div
                            class="flex items-center gap-1 text-xs font-medium text-[#393E46]
                               transition-colors group-hover:text-[#00ADB5] sm:text-sm">

                            مشاهده محصولات

                            <svg class="h-4 w-4 rotate-180 transition-transform duration-300 group-hover:-translate-x-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </div>

                    </div>

                </a>
            @endforeach

        </div>

    </section>

    {{-- Featured Products --}}
    <section class="mx-auto max-w-7xl px-4 py-7 sm:py-9">
        <div class="mb-4 flex items-center justify-between sm:mb-6">
            <h2 class="border-b-2 border-[#00ADB5] pb-2 text-xl font-bold text-[#222831]">جدیدترین محصولات</h2>
            <a href="{{ route('products') }}" class="flex items-center gap-1 text-sm text-[#00ADB5] hover:underline">
                مشاهده همه محصولات
                <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-3 md:grid-cols-4 md:gap-4">
            @foreach ($products as $product)
                <div
                    class="flex min-h-[290px] flex-col rounded-xl border border-[#393E46]/15 bg-[#EEEEEE] p-3 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg cursor-pointer sm:min-h-[315px] sm:p-4">
                    <div class="flex h-40 w-full items-center justify-center rounded-lg  sm:h-44">
                        <img class="h-full w-full object-contain p-2"
                            src="{{ asset('storage/images/products/' . $product->image) }}"
                            alt="{{ $product->name }}">
                    </div>
                    <h3 class="mt-3 line-clamp-2 min-h-10 text-center text-sm font-bold leading-5 text-[#222831]">
                        {{ $product->name }}</h3>
                    <p class="mt-1 text-center text-base font-bold text-[#00ADB5]">
                        {{ number_format($product->price) }} تومان</p>
                    <a href="{{ route('product-show', ['product' => $product->id]) }}"
                        class="mt-2 inline-flex items-center justify-center gap-2 rounded-lg bg-[#00ADB5] px-3 py-2 text-xs font-medium text-[#EEEEEE] transition hover:bg-[#393E46] sm:px-4 sm:text-sm">
                        مشاهده محصول →
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Promo Banner --}}
    <section class="mx-auto max-w-7xl px-4 py-7 sm:py-9">


        <div class="grid grid-cols-1 gap-1 sm:grid-cols-2 lg:grid-cols-4">
            <a href="{{ route('products') }}" class="group">
                <img class="w-full object-cover transition-transform duration-500
                               group-hover:scale-105"
                    src="{{ asset('images/banners/1.webp') }}" alt="">
            </a>
            <a href="{{ route('products') }}" class="group">
                <img class="w-full object-cover transition-transform duration-500
                               group-hover:scale-105"
                    src="{{ asset('images/banners/2.webp') }}" alt="">

            </a>
            <a href="{{ route('products') }}" class="group">
                <img class="w-full object-cover transition-transform duration-500
                               group-hover:scale-105"
                    src="{{ asset('images/banners/3.webp') }}" alt="">

            </a>
            <a href="{{ route('products') }}" class="group">
                <img class="w-full object-cover cursor-pointer transition-transform duration-500
                               group-hover:scale-105"
                    src="{{ asset('images/banners/4.webp') }}" alt="">
            </a>




        </div>

    </section>
    {{-- Articles Section --}}
    <section class="mx-auto mb-8 max-w-7xl px-4 py-7 sm:py-9">
        <div class="mb-4 flex items-center justify-between sm:mb-6">
            <h2 class="border-b-2 border-[#00ADB5] pb-2 text-xl font-bold text-[#222831]">آخرین مقالات</h2>
            <a href="{{ route('articles') }}" class="flex items-center gap-1 text-sm text-[#00ADB5] hover:underline">
                مشاهده همه مقالات
                <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 md:gap-5">
            @foreach ($articles as $article)
                <a href="{{ route('article-show', ['article' => $article->id]) }}"
                    class="flex flex-row items-center gap-3 overflow-hidden rounded-2xl border border-[#393E46]/15 bg-[#EEEEEE] p-3 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                    <div class="flex-1 flex flex-col gap-1">
                        <h3 class="line-clamp-2 text-base font-bold text-[#222831]">{{ $article->title }}</h3>
                        <p class="line-clamp-2 text-xs text-[#393E46]">
                            {{ $article->excerpt ?? $article->description }}
                        </p>
                        <div class="flex items-center gap-1 text-xs font-medium text-[#393E46]">
                            <span>{{ \Carbon\Carbon::parse($article->created_at)->format('Y/m/d') }}</span>
                        </div>
                    </div>
                    <div class="w-1/3 flex-shrink-0">
                        <img class="w-full h-24 object-cover rounded-lg"
                            src="{{ asset('storage/images/articles/' . $article->image) }}"
                            alt="{{ $article->title }}">
                    </div>
                </a>
            @endforeach
        </div>
    </section>

</main>

@include('layout.footer')
