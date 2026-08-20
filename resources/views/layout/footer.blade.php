<footer class=" bg-[#222831] text-[#EEEEEE]">
    <div class="mx-auto max-w-7xl px-5 py-10 sm:px-6 sm:py-12">
        <div class="grid grid-cols-1 gap-10 text-center md:grid-cols-3 md:gap-12 md:text-right">

            <div class="flex flex-col">
                <h3 class="mb-3 text-xl font-bold">فروشگاه لاراول</h3>
                <p class="max-w-sm self-center text-sm leading-7 text-[#EEEEEE]/70 md:self-start">
                    یک فروشگاه اینترنتی آزمایشی که توسط لاراول تولید شده است
                </p>
                <img class="mt-5 h-auto w-52 max-w-full self-center object-contain md:self-start"
                    src="{{ asset('images/logo/brand.webp') }}" alt="لوگوی فروشگاه Laravel Shop">
            </div>

            <div>
                <h4 class="mb-4 text-lg font-semibold">لینک‌های مفید</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('index') }}" class="text-[#EEEEEE]/70 transition hover:text-[#00ADB5]">صفحه
                            اصلی</a>
                    </li>
                    <li><a href="{{ route('products') }}"
                            class="text-[#EEEEEE]/70 transition hover:text-[#00ADB5]">محصولات</a>
                    </li>
                    <li><a href="{{ route('articles') }}"
                            class="text-[#EEEEEE]/70 transition hover:text-[#00ADB5]">مقالات</a>
                    </li>
                    <li><a href="{{ route('contact') }}"
                            class="text-[#EEEEEE]/70 transition hover:text-[#00ADB5]">درباره ما</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="mb-4 text-lg font-semibold">تماس با ما</h4>
                <ul class="space-y-3 text-sm leading-6 text-[#EEEEEE]/70">
                    <li>📞 09146911909</li>
                    <li>✉️ info@myshop.com</li>
                    <li>📍 تهران، خیابان اصلی</li>
                </ul>
            </div>
        </div>
        <div class="mt-10 border-t border-[#393E46] pt-5 text-center text-sm text-[#EEEEEE]/60">
            <p>&copy; ۲۰۲۶ تمامی حقوق محفوظ است. طراحی و توسعه توسط <span class="text-[#00ADB5]">فروشگاه من</span></p>
        </div>
    </div>
</footer>

{{-- js --}}
@include('components.toast')
@include('components.delete-modal')
@vite('resources/js/app.js')

</body>

</html>
