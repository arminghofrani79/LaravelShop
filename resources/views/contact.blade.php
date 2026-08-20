@section('title', 'درباره ما | LaravelShop')
@include('layout.header')
{{-- header --}}
<header
    class="relative flex min-h-[140px] w-full items-center overflow-hidden bg-cover bg-left bg-no-repeat px-4 sm:min-h-[150px] md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundcontact.webp') }}');">
    <div class="absolute inset-0 bg-gradient-to-l from-[#F5F6F7] via-[#F5F6F8] to-transparent"></div>
    <div class="relative z-10 mx-auto m-5 flex w-full max-w-7xl items-center justify-start rounded-2xl border-2 border-white p-5">
        <div class="max-w-xl text-right">
            <div class="mb-2 flex items-center gap-2">
                <span class="h-2 w-2 rounded-full bg-[#00ADB5]"></span>
                <span class="text-xs font-medium text-[#00ADB5] sm:text-sm">فروشگاه LaravelShop</span>
            </div>
            <h1 class="text-2xl font-bold text-[#222831] sm:text-3xl">درباره ما</h1>
            <div class="mt-2 ml-auto mr-0 h-[2px] w-16 rounded-full bg-[#00ADB5]"></div>
            <p class="mt-3 hidden max-w-md text-xs leading-7 text-[#393E46] sm:block md:text-base">
                با بیش از یک دهه تجربه، همراه شما هستیم تا خریدی مطمئن و لذت‌بخش را تجربه کنید.
            </p>
        </div>
    </div>
</header>


<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">
    {{-- story --}}
    <section class="mb-10 overflow-hidden rounded-2xl border border-[#393E46]/10 bg-white shadow-sm">
        <div class="grid items-stretch md:grid-cols-2">
            <div class="relative aspect-[16/10] overflow-hidden bg-[#F5F6F7] md:order-2 md:aspect-auto md:min-h-[360px]">
                <img src="{{ asset('images/banners/contact.webp') }}" alt="داستان فروشگاه LaravelShop"
                    class="absolute inset-0 h-full w-full object-cover transition duration-500 hover:scale-105">
            </div>
            <div class="flex flex-col justify-center p-5 text-right sm:p-8 lg:p-10 md:order-1">
                <span class="mb-4 w-fit rounded-full bg-[#00ADB5]/10 px-3 py-1 text-xs font-semibold text-[#00ADB5]">
                    همراه شما از سال ۱۳۹۵
                </span>
                <h2 class="text-2xl font-bold leading-9 text-[#222831] sm:text-3xl">داستان ما</h2>
                <p class="mt-5 text-sm leading-8 text-[#393E46]/75 sm:text-base sm:leading-9">
                    ما با هدف ایجاد بستری امن و مدرن برای خرید کالاهای دیجیتال شروع به کار کردیم. طی این سال‌ها با تکیه بر تخصص تیم فنی و اعتماد شما کاربران عزیز، توانسته‌ایم یکی از معتبرترین فروشگاه‌های آنلاین ایران باشیم.
                </p>
                <p class="mt-3 text-sm leading-8 text-[#393E46]/75 sm:text-base sm:leading-9">
                    تمرکز ما همواره بر رضایت مشتری و ارائه محصولات اورجینال بوده است و این مسیر را با قدرت ادامه خواهیم داد.
                </p>
            </div>
        </div>
    </section>

    {{-- values --}}
    <section class="mb-10" aria-labelledby="values-title">
        <div class="mb-5 flex items-center gap-4">
            <h2 id="values-title" class="shrink-0 text-xl font-bold text-[#222831] sm:text-2xl">چرا LaravelShop؟</h2>
            <span class="h-px flex-1 bg-[#00ADB5]/20"></span>
        </div>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
            <div class="group rounded-2xl border border-[#393E46]/10 bg-white p-6 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-[#00ADB5]/10 p-3 transition group-hover:bg-[#00ADB5]">
                    <img src="{{ asset('images/icons/star.webp') }}" alt="" class="h-8 w-8 object-contain">
                </div>
                <h3 class="text-lg font-bold text-[#222831]">چشم‌انداز</h3>
                <p class="mt-3 text-sm leading-7 text-[#393E46]/70">تبدیل شدن به محبوب‌ترین و مطمئن‌ترین گزینه خرید آنلاین در میان کاربران ایرانی.</p>
            </div>
            <div class="group rounded-2xl border border-[#393E46]/10 bg-white p-6 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-[#00ADB5]/10 p-3 transition group-hover:bg-[#00ADB5]">
                    <img src="{{ asset('images/icons/star2.webp') }}" alt="" class="h-8 w-8 object-contain">
                </div>
                <h3 class="text-lg font-bold text-[#222831]">مأموریت ما</h3>
                <p class="mt-3 text-sm leading-7 text-[#393E46]/70">ارائه محصولات باکیفیت و اورجینال، همراه با پشتیبانی ۲۴ ساعته و تجربه خریدی آسان برای همه.</p>
            </div>
            <div class="group rounded-2xl border border-[#393E46]/10 bg-white p-6 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-[#00ADB5]/10 p-3 transition group-hover:bg-[#00ADB5]">
                    <img src="{{ asset('images/icons/love.webp') }}" alt="" class="h-8 w-8 object-contain">
                </div>
                <h3 class="text-lg font-bold text-[#222831]">ارزش‌های ما</h3>
                <p class="mt-3 text-sm leading-7 text-[#393E46]/70">صداقت، اعتماد، نوآوری و احترام به مشتری، چهار اصل پایه‌ای در تمام فعالیت‌های ماست.</p>
            </div>
        </div>
    </section>

    {{-- frequently asked questions --}}
    <section class="mb-10" aria-labelledby="faq-title">
        <div class="mb-5 flex items-center gap-4">
            <h2 id="faq-title" class="shrink-0 text-xl font-bold text-[#222831] sm:text-2xl">سوالات متداول</h2>
            <span class="h-px flex-1 bg-[#00ADB5]/20"></span>
        </div>

        <div class="mx-auto max-w-4xl space-y-3">
            <details class="group rounded-2xl border border-[#393E46]/10 bg-white shadow-sm transition open:border-[#00ADB5]/30 open:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 text-right text-sm font-bold text-[#222831] sm:px-6 sm:py-5 sm:text-base">
                    <span>چطور می‌توانم سفارشم را ثبت کنم؟</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/10 text-lg font-normal text-[#00ADB5] transition group-open:rotate-45">+</span>
                </summary>
                <div class="border-t border-[#393E46]/10 px-5 pb-5 pt-4 text-justify text-sm leading-8 text-[#393E46]/75 sm:px-6">
                    محصول موردنظر خود را از بخش محصولات انتخاب کنید، آن را به سبد خرید اضافه کرده و پس از بررسی سفارش، مراحل ثبت و پرداخت را تکمیل کنید.
                </div>
            </details>

            <details class="group rounded-2xl border border-[#393E46]/10 bg-white shadow-sm transition open:border-[#00ADB5]/30 open:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 text-right text-sm font-bold text-[#222831] sm:px-6 sm:py-5 sm:text-base">
                    <span>مدت زمان ارسال سفارش چقدر است؟</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/10 text-lg font-normal text-[#00ADB5] transition group-open:rotate-45">+</span>
                </summary>
                <div class="border-t border-[#393E46]/10 px-5 pb-5 pt-4 text-justify text-sm leading-8 text-[#393E46]/75 sm:px-6">
                    سفارش‌ها معمولاً بین ۲ تا ۵ روز کاری به دست شما می‌رسند. زمان دقیق ارسال با توجه به مقصد در هنگام ثبت سفارش اعلام می‌شود.
                </div>
            </details>

            <details class="group rounded-2xl border border-[#393E46]/10 bg-white shadow-sm transition open:border-[#00ADB5]/30 open:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 text-right text-sm font-bold text-[#222831] sm:px-6 sm:py-5 sm:text-base">
                    <span>آیا امکان بازگشت یا تعویض کالا وجود دارد؟</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/10 text-lg font-normal text-[#00ADB5] transition group-open:rotate-45">+</span>
                </summary>
                <div class="border-t border-[#393E46]/10 px-5 pb-5 pt-4 text-justify text-sm leading-8 text-[#393E46]/75 sm:px-6">
                    بله، در صورت وجود مشکل یا مغایرت، می‌توانید تا ۷ روز پس از دریافت کالا درخواست بررسی و تعویض خود را با پشتیبانی در میان بگذارید.
                </div>
            </details>

            <details class="group rounded-2xl border border-[#393E46]/10 bg-white shadow-sm transition open:border-[#00ADB5]/30 open:shadow-md">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 text-right text-sm font-bold text-[#222831] sm:px-6 sm:py-5 sm:text-base">
                    <span>چطور می‌توانم وضعیت سفارش خود را پیگیری کنم؟</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#00ADB5]/10 text-lg font-normal text-[#00ADB5] transition group-open:rotate-45">+</span>
                </summary>
                <div class="border-t border-[#393E46]/10 px-5 pb-5 pt-4 text-justify text-sm leading-8 text-[#393E46]/75 sm:px-6">
                    پس از ورود به حساب کاربری، از بخش «سفارش‌های من» می‌توانید وضعیت و جزئیات تمام سفارش‌های خود را مشاهده کنید.
                </div>
            </details>
        </div>
    </section>

    {{-- contact information --}}
    <section class="rounded-2xl border border-[#00ADB5]/15 bg-[#00ADB5]/5 p-5 sm:p-8" aria-labelledby="contact-title">
        <div class="mb-6 text-right sm:text-center">
            <h2 id="contact-title" class="text-xl font-bold text-[#222831] sm:text-2xl">اطلاعات تماس با ما</h2>
            <p class="mt-2 text-sm leading-7 text-[#393E46]/70">همیشه آماده پاسخگویی به سوالات شما هستیم.</p>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
            <div class="rounded-xl border border-[#393E46]/10 bg-white p-5 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-[#00ADB5]/10 p-2">
                    <img src="{{ asset('images/icons/phone.webp') }}" alt="" class="h-6 w-6 object-contain">
                </div>
                <h3 class="text-sm font-bold text-[#222831]">شماره تماس</h3>
                <p class="mt-2 text-sm font-medium text-[#393E46]">۰۲۱ - ۱۲۳۴۵۶۷۸</p>
                <p class="mt-1 text-xs text-[#393E46]/55">ساعات پاسخگویی: ۹ الی ۲۱</p>
            </div>
            <div class="rounded-xl border border-[#393E46]/10 bg-white p-5 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-[#00ADB5]/10 p-2">
                    <img src="{{ asset('images/icons/email.webp') }}" alt="" class="h-6 w-6 object-contain">
                </div>
                <h3 class="text-sm font-bold text-[#222831]">ایمیل</h3>
                <a href="mailto:info@laravelshop.com" class="mt-2 block text-sm font-medium text-[#00ADB5] hover:underline">info@laravelshop.com</a>
            </div>
            <div class="rounded-xl border border-[#393E46]/10 bg-white p-5 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-[#00ADB5]/10 p-2">
                    <img src="{{ asset('images/icons/address.webp') }}" alt="" class="h-6 w-6 object-contain">
                </div>
                <h3 class="text-sm font-bold text-[#222831]">آدرس دفتر مرکزی</h3>
                <p class="mt-2 text-sm leading-7 text-[#393E46]/75">تهران، خیابان ولیعصر، نبش میدان ونک، برج تجاری ونک، طبقه ۵</p>
            </div>
        </div>
    </section>
</main>
@include('layout.footer')
