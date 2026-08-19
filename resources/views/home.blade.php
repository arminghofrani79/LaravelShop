@include('layout.header')

<main class="w-full">

    {{-- Hero Banner --}}
    <div class="relative w-full h-[500px] overflow-hidden">
        {{-- اسلایدها --}}
        <a href="{{ route('products') }}" class="cursor-pointer">
            <div
                class="banner-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100">
                <img src="{{ asset('images/banners/banner1.webp') }}" class="w-full h-full object-cover" alt="بنر ۱">
            </div>
            <div
                class="banner-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
                <img src="{{ asset('images/banners/banner2.webp') }}" class="w-full h-full object-cover" alt="بنر ۲">
            </div>
            <div
                class="banner-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
                <img src="{{ asset('images/banners/banner3.webp') }}" class="w-full h-full object-cover" alt="بنر ۳">
            </div>
        </a>


        {{-- دکمه‌های قبلی/بعدی --}}
        <button id="prevBanner"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 p-2 rounded-full shadow-md z-10 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="nextBanner"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 p-2 rounded-full shadow-md z-10 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    {{-- Benefits Section --}}
    <section class="max-w-7xl mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <div
                class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-100 transition-all duration-200 cursor-default">
                <img class="w-10 h-10 object-contain" src="{{ asset('images/icons/send.webp') }}" alt="ارسال سریع">
                <div>
                    <span class="font-bold text-gray-800 text-sm">ارسال سریع</span>
                    <p class="text-gray-400 text-xs">ارسال به سراسر کشور</p>
                </div>
            </div>
            <div
                class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-100 transition-all duration-200 cursor-default">
                <img class="w-10 h-10 object-contain" src="{{ asset('images/icons/garanti.webp') }}" alt="ضمانت کیفیت">
                <div>
                    <span class="font-bold text-gray-800 text-sm">ضمانت کیفیت</span>
                    <p class="text-gray-400 text-xs">گارانتی ۲۴ ماهه</p>
                </div>
            </div>
            <div
                class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-100 transition-all duration-200 cursor-default">
                <img class="w-10 h-10 object-contain" src="{{ asset('images/icons/support.webp') }}" alt="پشتیبانی">
                <div>
                    <span class="font-bold text-gray-800 text-sm">پشتیبانی حرفه‌ای</span>
                    <p class="text-gray-400 text-xs">پاسخگوی شما هستیم</p>
                </div>
            </div>
            <div
                class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-100 transition-all duration-200 cursor-default">
                <img class="w-10 h-10 object-contain" src="{{ asset('images/icons/credit.webp') }}" alt="پرداخت امن">
                <div>
                    <span class="font-bold text-gray-800 text-sm">پرداخت امن</span>
                    <p class="text-gray-400 text-xs">پرداخت اینترنتی امن</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Categories Section --}}
    <section class="max-w-7xl mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-800">دسته‌بندی‌های محبوب</h2>
            <a href="{{ route('products') }}" class="text-blue-500 flex items-center gap-1 text-sm hover:underline">
                مشاهده دسته‌بندی‌ها
                <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 md:gap-6">
            @php
                $randomImages = [
                    asset('images/categories/image1.webp'),
                    asset('images/categories/image2.webp'),
                    asset('images/categories/image3.webp'),
                ];
            @endphp
            @foreach ($categories as $category)
                <div
                    class="flex flex-col items-center justify-center bg-gray-100 rounded-xl p-4 h-44 hover:bg-gray-200 hover:scale-105 transition-all duration-200 cursor-pointer border border-gray-200/50">
                    <img class="w-20 h-20 object-contain mb-2" src="{{ $randomImages[$loop->index % 3] }}"
                        alt="{{ $category->name }}">
                    <p class="text-sm font-medium text-gray-700">{{ $category->name }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Featured Products --}}
    <section class="max-w-7xl mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-800">جدیدترین محصولات</h2>
            <a href="{{ route('products') }}" class="text-blue-500 flex items-center gap-1 text-sm hover:underline">
                مشاهده همه محصولات
                <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            @foreach ($products as $product)
                <div
                    class="flex flex-col items-center justify-between bg-white rounded-xl p-4 h-[320px] hover:shadow-lg hover:scale-105 transition-all duration-200 cursor-pointer border border-gray-100/80">
                    <img class="w-full h-32 object-contain rounded-lg"
                        src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{ $product->name }}">
                    <h3 class="text-sm font-bold text-gray-800 text-center line-clamp-2 mt-2">{{ $product->name }}</h3>
                    <p class="text-blue-600 font-bold text-lg mt-1">{{ number_format($product->price) }} تومان</p>
                    <a href="{{ route('product-show', ['product' => $product->id]) }}"
                        class="text-blue-500 text-sm font-medium hover:underline mt-2">
                        مشاهده محصول →
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Promo Banner --}}
    <section class="max-w-7xl mx-auto px-4 py-10">
        <div
            class="flex flex-col-reverse md:flex-row items-stretch bg-gradient-to-l from-gray-200 to-black rounded-2xl shadow-xl overflow-hidden border border-gray-100/50">
            <div class="flex-1 p-8 md:p-12 flex flex-col justify-center text-center md:text-right">
                <span
                    class="inline-block bg-red-100 text-red-600 text-xs font-bold px-4 py-1.5 rounded-full mb-4 self-center md:self-start">
                    فروش ویژه
                </span>
                <h2 class="text-2xl md:text-4xl font-bold text-gray-800 leading-tight">
                    تا ۲۰٪ تخفیف
                </h2>
                <p class="text-gray-500 text-base md:text-lg mt-3 max-w-md mx-auto md:mx-0">
                    روی منتخب ساعت‌های مردانه
                </p>
                <div class="mt-6">
                    {{-- فرض بر این است که یک محصول خاص برای بنر دارید --}}
                    @if (isset($featuredProduct))
                        <a href="{{ route('product-show', ['product' => $featuredProduct->id]) }}"
                            class="inline-flex items-center gap-2 bg-gray-700 hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition-all duration-300">
                            مشاهده و خرید
                            <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    @else
                        <a href="{{ route('products') }}"
                            class="inline-flex items-center gap-2 bg-gray-700 hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition-all duration-300">
                            مشاهده و خرید
                            <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
            <div class="w-full md:w-2/5 h-56 md:h-auto min-h-[200px] flex-shrink-0">
                <img class="w-full h-full object-cover" src="{{ asset('images/banners/offer.webp') }}"
                    alt="تخفیف ویژه">
            </div>
        </div>
    </section>

    {{-- Articles Section --}}
    <section class="max-w-7xl mx-auto px-4 py-6 mb-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-800">آخرین مقالات</h2>
            <a href="{{ route('articles') }}" class="text-blue-500 flex items-center gap-1 text-sm hover:underline">
                مشاهده همه مقالات
                <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach ($articles as $article)
                <a href="{{ route('article-show', ['article' => $article->id]) }}"
                    class="flex flex-row items-center bg-white rounded-2xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer overflow-hidden p-3 gap-3 border border-gray-100/50">
                    <div class="flex-1 flex flex-col gap-1">
                        <h3 class="font-bold text-base text-gray-800 line-clamp-2">{{ $article->title }}</h3>
                        <p class="text-gray-400 text-xs line-clamp-2">{{ $article->excerpt ?? $article->description }}
                        </p>
                        <div class="flex items-center gap-1 text-gray-400 text-xs font-medium">
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
