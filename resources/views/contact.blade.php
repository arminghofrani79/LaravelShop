@section('title', 'درباره ما | LaravelShop')
@include('layout.header')
{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundcontact.webp') }}');">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">درباره ما</h1>
    <p class="hidden md:block text-gray-500 w-105 text-sm md:text-base max-w-2xl mx-15 leading-relaxed">
        با بیش از یک دهه تجربه در ارائه بهترین محصولات دیجیتال، همراه شما هستیم تا خریدی مطمئن و لذت‌بخش را تجربه کنید.
    </p>
</header>


<main class="flex flex-col mx-auto max-w-7xl px-4 py-8 md:py-12 gap-4">
    {{-- header --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start mb-16 p-5">
        <div class="w-full h-64 md:h-80 rounded-xl overflow-hidden shadow-sm">
            <img src="{{ asset('images/banners/contact.webp') }}" alt="درباره ما" class="w-full h-full object-cover">
        </div>
        <div class="space-y-4 text-right">
            <h2 class="text-2xl font-bold text-gray-800">داستان ما</h2>
            <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                ما در سال ۱۳۹۵ با هدف ایجاد بستری امن و مدرن برای خرید کالاهای دیجیتال شروع به کار کردیم. طی این سال‌ها
                با تکیه بر تخصص تیم فنی خود و اعتماد شما کاربران عزیز، توانسته‌ایم یکی از معتبرترین فروشگاه‌های آنلاین
                ایران باشیم.
            </p>
            <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                تمرکز ما همواره بر روی رضایت مشتری و ارائه محصولات اورجینال بوده است و این مسیر را با قدرت ادامه خواهیم
                داد.
            </p>
        </div>
    </div>

    <!--contact cards-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

        <div class="bg-white rounded-xl shadow-sm p-6 text-center border border-gray-100 hover:shadow-md transition">
            <div class="w-12 h-12 bg-gray-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <img src="{{ asset('images/icons/star.webp') }}" alt="">
            </div>
            <h3 class="font-bold text-gray-800 text-lg mb-2">چشم‌انداز</h3>
            <p class="text-gray-500 text-sm leading-relaxed">
                تبدیل شدن به محبوب‌ترین و مطمئن‌ترین گزینه خرید آنلاین در میان کاربران ایرانی.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 text-center border border-gray-100 hover:shadow-md transition">
            <div class="w-12 h-12 bg-gray-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <img src="{{ asset('images/icons/star2.webp') }}" alt="">
            </div>
            <h3 class="font-bold text-gray-800 text-lg mb-2">مأموریت ما</h3>
            <p class="text-gray-500 text-sm leading-relaxed">
                ارائه محصولات باکیفیت و اورجینال، همراه با پشتیبانی ۲۴ ساعته و تجربه خریدی آسان برای همه.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 text-center border border-gray-100 hover:shadow-md transition">
            <div class="w-12 h-12 bg-gray-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <img src="{{ asset('images/icons/love.webp') }}" alt="">
            </div>
            <h3 class="font-bold text-gray-800 text-lg mb-2">ارزش‌های ما</h3>
            <p class="text-gray-500 text-sm leading-relaxed">
                صداقت، اعتماد، نوآوری و احترام به مشتری، چهار اصل پایه‌ای در تمام فعالیت‌های ماست.
            </p>
        </div>

    </div>

    <!-- contact information -->
    <div class="bg-gray-50 rounded-xl p-6 md:p-8 border border-gray-200">

        <div class="text-center mb-6">
            <h3 class="text-xl font-bold text-gray-800">اطلاعات تماس با ما</h3>
            <p class="text-gray-500 text-sm mt-1">همیشه آماده پاسخگویی به سوالات شما هستیم</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- phone card-->
            <div
                class="flex flex-col items-center text-center bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="w-10 h-10 bg-gray-100 text-blue-600 rounded-full flex items-center justify-center mb-3">
                    <img src="{{ asset('images/icons/phone.webp') }}" alt="">
                </div>
                <h4 class="font-bold text-gray-700 text-sm mb-1">شماره تماس</h4>
                <p class="text-gray-600 text-sm font-medium">۰۲۱ - ۱۲۳۴۵۶۷۸</p>
                <p class="text-gray-400 text-xs">ساعات پاسخگویی: ۹ الی ۲۱</p>
            </div>

            <!--  email card -->
            <div
                class="flex flex-col items-center text-center bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="w-10 h-10 bg-gray-100 text-blue-600 rounded-full flex items-center justify-center mb-3">
                    <img src="{{ asset('images/icons/email.webp') }}" alt="">
                </div>
                <h4 class="font-bold text-gray-700 text-sm mb-1">ایمیل</h4>
                <a href="mailto:info@laravelshop.com"
                    class="text-blue-600 text-sm hover:underline font-medium">info@laravelshop.com</a>
            </div>

            <!-- address card -->
            <div
                class="flex flex-col items-center text-center bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="w-10 h-10 bg-gray-100 text-blue-600 rounded-full flex items-center justify-center mb-3">
                    <img src="{{ asset('images/icons/address.webp') }}" alt="">
                </div>
                <h4 class="font-bold text-gray-700 text-sm mb-1">آدرس دفتر مرکزی</h4>
                <p class="text-gray-600 text-sm leading-relaxed">تهران، خیابان ولیعصر، نبش میدان ونک، برج تجاری ونک،
                    طبقه ۵</p>
            </div>

        </div>
    </div>

</main>
@include('layout.footer')
