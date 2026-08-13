@include('layout.header')
<main>
    {{-- hero baner --}}
    <div class="max-w-7xl mx-auto px-4 mt-6">
        <a href="#"
            class="block overflow-hidden rounded-2xl shadow-2xl transition-transform duration-300 hover:scale-[1.02]">
            <img class="w-full h-48 sm:h-64 md:h-80 lg:h-96 object-cover" src="{{ asset('images/banners/top.png') }}"
                alt="بنر تبلیغاتی فروشگاه">
        </a>
    </div>

    {{-- benefits --}}
    <div class="flex items-center justify-center flex-col w-full max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mr-10 ml-10 gap-4 md:gap-6">

            <div
                class="flex items-center flex-row text-l p-3 rounded-xl hover:bg-amber-50/70 transition-all duration-200">
                <img class=" rounded-md border-gray-400 w-10 h-10" src="{{ asset('images/icons/send.png') }}"
                    alt="i">
                <div class="mr-4 flex flex-col">
                    <span class="font-bold text-gray-800">ارسال سریع</span>
                    <p class="text-gray-400">ارسال به سراسر کشور</p>
                </div>
            </div>

            <div class="flex items-center flex-row p-3 rounded-xl hover:bg-amber-50/70 transition-all duration-200">
                <img class=" rounded-md border-gray-400 w-10 h-10" src="{{ asset('images/icons/garanti.png') }}"
                    alt="i">
                <div class="mr-4 flex flex-col">
                    <span class="font-bold text-gray-800">ضمانت کیفیت</span>
                    <p class="text-gray-400">گارانتی 24ماهه</p>
                </div>
            </div>

            <div class="flex items-center flex-row p-3 rounded-xl hover:bg-amber-50/70 transition-all duration-200">
                <img class=" rounded-md border-gray-400 w-10 h-10" src="{{ asset('images/icons/support.png') }}"
                    alt="i">
                <div class="mr-4 flex flex-col">
                    <span class="font-bold text-gray-800">پشتیبانی حرفه ای</span>
                    <p class="text-gray-400">پاسخگوی شما هستیم</p>
                </div>
            </div>

            <div class="flex items-center flex-row p-3 rounded-xl hover:bg-amber-50/70 transition-all duration-200">
                <img class=" rounded-md border-gray-400 w-10 h-10" src="{{ asset('images/icons/credit.png') }}"
                    alt="i">
                <div class="mr-4 flex flex-col">
                    <span class="font-bold text-gray-800">پرداخت امن</span>
                    <p class="text-gray-400">پرداخت اینترنتی امن</p>
                </div>
            </div>

        </div>
    </div>

    {{-- categories --}}
    <div class="flex flex-col mr-15 ml-15 mt-10 text-l">
        <div class="flex justify-between mb-3">
            <h2 class="font-bold">دسته بندی های محبوب</h2>
            <a class="text-blue-500 flex" href="{{ route('products') }}">
                مشاهده دسته بندی ها
                <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 md:gap-6">
            <div
                class="flex flex-col items-center justify-center bg-gray-200 rounded-xl p-4 h-48 hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer">
                <img class="h-30 w-20 p-2" src="{{ asset('images/products/manwatch.png') }}" alt="a">
                <p> ساعت مردانه </p>
            </div>
            <div
                class="flex flex-col items-center justify-center bg-gray-200 rounded-xl p-4 h-48 hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer">
                <img class="h-30 w-20 p-2" src="{{ asset('images/products/manwatch.png') }}" alt="a">
                <p> ساعت زنانه </p>
            </div>
            <div
                class="flex flex-col items-center justify-center bg-gray-200 rounded-xl p-4 h-48 hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer">
                <img class="h-30 w-20 p-2" src="{{ asset('images/products/manwatch.png') }}" alt="a">
                <p> ساعت پچگانه </p>
            </div>
            <div
                class="flex flex-col items-center justify-center bg-gray-200 rounded-xl p-4 h-48 hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer">
                <img class="h-30 w-20 p-2" src="{{ asset('images/products/manwatch.png') }}" alt="a">
                <p> ساعت پچگانه </p>
            </div>

        </div>
    </div>

    {{-- feature products --}}
    <div class="flex flex-col mr-15 ml-15 mt-10 text-l ">
        <div class="flex justify-between mb-3">
            <h2 class="font-bold">جدید ترین محصولات</h2>
            <a class="text-blue-500 flex" href="{{ route('products') }}">مشاهده همه محصولات
                <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>

            </a>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <div
                class="flex flex-col items-center justify-between bg-gray-200 rounded-xl p-4 h-70 
                hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer shadow-md">
                <img class="h-32 w-full object-contain" src="{{ asset('images/products/manwatch.png') }}"
                    alt="ساعت سیتیزن">
                <h3 class="text-sm font-bold text-gray-800 text-center line-clamp-2 mt-2">ساعت مچی مردانه سیتیزن مدل
                    ksd
                </h3>
                <p class="text-blue-600 font-bold text-lg mt-1">۹,۹۰۰,۰۰۰ تومان</p>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline mt-2">مشاهده محصول →</a>
            </div>
            <div
                class="flex flex-col items-center justify-between bg-gray-200 rounded-xl p-4 h-70 
                hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer shadow-md">
                <img class="h-32 w-full object-contain" src="{{ asset('images/products/manwatch.png') }}"
                    alt="ساعت سیتیزن">
                <h3 class="text-sm font-bold text-gray-800 text-center line-clamp-2 mt-2">ساعت مچی مردانه سیتیزن مدل
                    ksd
                </h3>
                <p class="text-blue-600 font-bold text-lg mt-1">۹,۹۰۰,۰۰۰ تومان</p>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline mt-2">مشاهده محصول →</a>
            </div>
            <div
                class="flex flex-col items-center justify-between bg-gray-200 rounded-xl p-4 h-70 
                hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer shadow-md">
                <img class="h-32 w-full object-contain" src="{{ asset('images/products/manwatch.png') }}"
                    alt="ساعت سیتیزن">
                <h3 class="text-sm font-bold text-gray-800 text-center line-clamp-2 mt-2">ساعت مچی مردانه سیتیزن
                    مدل ksd
                </h3>
                <p class="text-blue-600 font-bold text-lg mt-1">۹,۹۰۰,۰۰۰ تومان</p>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline mt-2">مشاهده محصول
                    →</a>
            </div>
            <div
                class="flex flex-col items-center justify-between bg-gray-200 rounded-xl p-4 h-70 
                hover:bg-gray-300 hover:scale-105 transition-all duration-200 cursor-pointer shadow-md">
                <img class="h-32 w-full object-contain" src="{{ asset('images/products/manwatch.png') }}"
                    alt="ساعت سیتیزن">
                <h3 class="text-sm font-bold text-gray-800 text-center line-clamp-2 mt-2">ساعت مچی مردانه سیتیزن
                    مدل
                    ksd
                </h3>
                <p class="text-blue-600 font-bold text-lg mt-1">۹,۹۰۰,۰۰۰ تومان</p>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline mt-2">مشاهده محصول
                    →</a>
            </div>

        </div>
    </div>

    {{-- promo banner --}}
    <section
        class="max-w-7xl mx-auto px-4 mb-10 mt-10 ml-5 mr-5 flex flex-col-reverse md:flex-row items-stretch bg-gradient-to-l from-gray-200 to-black rounded-2xl shadow-xl overflow-hidden border border-amber-100/50">

        <div class="flex-1 p-8 md:p-12 flex flex-col justify-center text-center md:text-right">
            <span
                class="inline-block bg-red-100 text-red-600 text-xs font-extrabold px-4 py-1.5 rounded-full mb-4 self-center md:self-start">
                فروش ویژه
            </span>
            <h2 class="text-2xl md:text-5xl lg:text-6xl font-black text-gray-800 leading-tight">
                تا 20% تخفیف
            </h2>
            <p class="text-gray-500 text-base md:text-lg mt-3 max-w-md mx-auto md:mx-0">
                روی منتخب ساعت‌های مردانه
            </p>
            <div class="mt-6">
                <a href="#"
                    class="inline-flex items-center gap-2 bg-gray-600 hover:bg-gray-700 text-white font-bold py-3 px-8 rounded-xl shadow-lg hover:shadow-blue-200 transition-all duration-300">
                    مشاهده و خرید
                    <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="w-full md:w-2/5 h-56 md:h-auto min-h-[200px] flex-shrink-0">
            <img class="w-full h-full object-cover  left-0" src="{{ asset('images/banners/offer.png') }}"
                alt="تخفیف ویژه ساعت‌های مردانه">
        </div>
    </section>

    {{-- articles --}}
    <article class="flex flex-col mr-15 ml-15 mt-10 text-l">
        <div class="flex justify-between mb-3">
            <h2 class="font-bold">آخرین مقالات</h2>
            <a class="text-blue-500 flex" href="{{ route('articles') }}">
                مشاهده همه مقالات
                <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 max-w-7xl mx-auto px-4">

            <div
                class="flex flex-row items-center bg-white rounded-2xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer overflow-hidden p-3 gap-3 border border-gray-100/50">
                <div class="flex-1 flex flex-col gap-2">
                    <h2 class="font-bold text-base md:text-lg text-gray-800 line-clamp-2">تاریخچه برند ری بن</h2>
                    <p class="text-gray-400 text-xs md:text-sm line-clamp-2">داستان یکی از برند های محبوب عینک
                        آفتابی
                    </p>
                    <div class="flex items-center gap-1 text-gray-400 text-xs font-bold">
                        <i class="fas fa-calendar-alt text-amber-500"></i>
                        <span>۱۴۰۲/۰۲/۰۱</span>
                    </div>
                </div>
                <div class="w-1/3 flex-shrink-0">
                    <img class="w-full h-24 md:h-28 object-cover rounded-lg"
                        src="{{ asset('images/articles/q.webp') }}" alt="تاریخچه برند ری بن">
                </div>

            </div>

            <div
                class="flex flex-row items-center bg-white rounded-2xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer overflow-hidden p-3 gap-3 border border-gray-100/50">
                <div class="flex-1 flex flex-col gap-2">
                    <h2 class="font-bold text-base md:text-lg text-gray-800 line-clamp-2">۱۰ مدل برتر عینک آفتابی
                    </h2>
                    <p class="text-gray-400 text-xs md:text-sm line-clamp-2">معرفی محبوب‌ترین مدل‌های عینک آفتابی
                        ۲۰۲۴
                    </p>
                    <div class="flex items-center gap-1 text-gray-400 text-xs font-bold">
                        <i class="fas fa-calendar-alt text-amber-500"></i>
                        <span>۱۴۰۲/۰۱/۱۵</span>
                    </div>
                </div>
                <div class="w-1/3 flex-shrink-0">
                    <img class="w-full h-24 md:h-28 object-cover rounded-lg"
                        src="{{ asset('images/articles/q.webp') }}" alt="۱۰ مدل برتر عینک آفتابی">
                </div>
            </div>

            <div
                class="flex flex-row items-center bg-white rounded-2xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer overflow-hidden p-3 gap-3 border border-gray-100/50">
                <div class="flex-1 flex flex-col gap-2">
                    <h2 class="font-bold text-base md:text-lg text-gray-800 line-clamp-2">راهنمای خرید عینک آفتابی
                    </h2>
                    <p class="text-gray-400 text-xs md:text-sm line-clamp-2">چگونه بهترین عینک آفتابی را انتخاب
                        کنیم؟
                    </p>
                    <div class="flex items-center gap-1 text-gray-400 text-xs font-bold">
                        <i class="fas fa-calendar-alt text-amber-500"></i>
                        <span>۱۴۰۱/۱۲/۲۰</span>
                    </div>
                </div>
                <div class="w-1/3 flex-shrink-0">
                    <img class="w-full h-24 md:h-28 object-cover rounded-lg"
                        src="{{ asset('images/articles/q.webp') }}" alt="راهنمای خرید عینک آفتابی">
                </div>
            </div>

        </div>
    </article>

</main>
@include('layout.footer')
