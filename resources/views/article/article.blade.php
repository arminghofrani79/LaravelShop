@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundarticle.png') }}');">
    <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">مقاله</h1>
</header>
{{-- article --}}
<article class="container mx-auto max-w-4xl px-4 py-8 md:py-12">

    <!-- article image -->
    <div class="w-full mb-6">
        <img src="{{ asset('images/articles/article1.png') }}" alt="تصویر مقاله"
            class="w-full h-64 md:h-96 object-cover rounded-xl shadow-sm">
    </div>

    <!-- category & title -->
    <div class="flex flex-col gap-3 mb-8">
        <span class="bg-gray-100 text-gray-600 rounded-full px-3 py-1 w-fit text-xs font-medium">
            راهنمای خرید
        </span>
        <h1 class="text-2xl md:text-4xl font-bold text-gray-800">
            راهنمای خرید ساعت در سال 1405
        </h1>
    </div>

    <!-- metadata -->
    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 border-b border-gray-200 pb-6 mb-6">
        <div class="flex items-center gap-2">
            <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
            <span>نویسنده: علی محمدی</span>
        </div>
        <div class="flex items-center gap-2">
            <img class="w-4 h-4" src="{{ asset('images/icons/calendar.png') }}" alt="">
            <span>۲ اردیبهشت ۱۴۰۵</span>
        </div>
    </div>

    <!-- article paragraph -->
    <div class="text-gray-700 text-justify leading-relaxed text-base md:text-lg space-y-6 mb-10">
        <p>
            در این راهنمای قصد دارم به بررسی دقیق نکات مهم قبل از خرید ساعت بپردازیم. از انتخاب موتور مناسب یا دستبند با
            کیفیت گرفته تا بررسی برندها و قیمت‌ها، همه مواردی است که در این مقاله به آنها پرداخته شده است.
        </p>
        <p>
            یکی از مهم‌ترین سوالاتی که برای خریداران پیش می‌آید این است که «ساعت مناسب برای من کدام است؟». در پاسخ باید
            گفت که بستگی به سلیقه، بودجه و نیاز روزمره شما دارد. اگر به دنبال یک ساعت لوکس هستید، برندهای سوئیسی
            گزینه‌های بهتری هستند و اگر به دنبال کاربری روزمره و ورزشی هستید، برندهای ژاپنی و یا ساعت‌های هوشمند انتخاب
            هوشمندانه‌تری خواهند بود.
        </p>
        <p>
            فراموش نکنید که ساعت نه تنها یک ابزار برای دیدن زمان است، بلکه یک اکسسوری مهم در استایل شخصی شما محسوب
            می‌شود. پس در انتخاب آن دقت کافی را به خرج دهید.
        </p>
    </div>

    <!-- redirect to articles page -->
    <div class="flex justify-center md:justify-start pt-6 border-t border-gray-100">
        <a href="{{ route('articles') }}"
            class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست مقالات
        </a>
    </div>

</article>


@include('layout.footer')
