@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundarticle.png') }}');">
    <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">مقالات</h1>
</header>
{{-- articles --}}
<article>
    {{-- single article in header --}}
    <header
        class="flex flex-col md:flex-row gap-6 mx-4 md:mx-10 p-5 md:p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-gray-200 cursor-pointer">
        <div class="flex flex-col gap-4 w-full md:w-1/2 justify-between">
            <div class="bg-gray-100 text-gray-600 rounded-full px-3 py-1 w-fit text-xs font-medium mb-2">
                راهنمای خرید
            </div>
            <h1 class="font-bold text-xl md:text-2xl text-gray-800">راهنمای خرید ساعت در سال 1405</h1>
            <p class="text-gray-500 text-sm leading-relaxed">
                در این راهنمای قصد دارم به بررسی دقیق نکات مهم قبل خرید ساعت بپردازیم. از انتخاب موتور مناسب یا دستبند
                با کیفیت.
            </p>
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-2">
                <span class="text-gray-400 text-xs">۲ اردیبهشت ۱۴۰۵</span>
                <div
                    class="h-10 bg-gray-800 hover:bg-gray-900 rounded-lg flex items-center justify-center transition-colors px-6">
                    <a href="{{ route('article') }}"
                        class="text-white text-sm font-medium w-full h-full flex items-center justify-center">
                        مطالعه مقاله
                    </a>
                </div>
            </div>
        </div>

        <!-- ستون تصویر (سمت چپ در حالت RTL) -->
        <div class="w-full md:w-1/2 flex items-center justify-center md:justify-end">
            <img src="{{ asset('images/articles/article1.png') }}" class="w-full h-48 md:h-auto object-cover rounded-xl"
                alt="تصویر مقاله ساعت">
        </div>

    </header>
    {{-- article category --}}
    <nav class="flex flex-wrap justify-center gap-4 px-4 md:mx-10 my-6">
        <button
            class="flex items-center justify-center bg-gray-800 text-white border border-gray-800 rounded-xl px-5 py-1.5 text-sm font-medium transition hover:bg-gray-900 cursor-pointer">
            همه مقالات
        </button>
        {{-- inactivebutto, --}}
        <button
            class="flex items-center justify-center bg-gray-100 text-gray-700 border border-gray-300 rounded-xl px-5 py-1.5 text-sm font-medium transition hover:bg-gray-200 cursor-pointer">
            آموزشی
        </button>

        <button
            class="flex items-center justify-center bg-gray-100 text-gray-700 border border-gray-300 rounded-xl px-5 py-1.5 text-sm font-medium transition hover:bg-gray-200 cursor-pointer">
            خبری
        </button>

        <button
            class="flex items-center justify-center bg-gray-100 text-gray-700 border border-gray-300 rounded-xl px-5 py-1.5 text-sm font-medium transition hover:bg-gray-200 cursor-pointer">
            راهنمای خرید
        </button>
    </nav>

    {{-- paginate 3 articles --}}
    <main class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full px-4 py-8 gap-2">
        @for ($i = 1; $i <= 3; $i++)
            {{-- article card --}}
            <div
                class="flex flex-col h-full bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-gray-200 cursor-pointer overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{ asset('images/articles/article1.png') }}" alt="a">
                <div class="flex flex-col justify-between flex-grow p-5 gap-3">
                    <div class="bg-gray-100 text-gray-600 rounded-full px-3 py-1 w-fit text-xs font-medium mb-2">
                        راهنمای خرید
                    </div>
                    <h1 class="font-bold text-l md:text-2xl text-gray-800">راهنمای خرید ساعت در سال 1405</h1>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        در این راهنمای قصد دارم به بررسی دقیق نکات مهم قبل خرید ساعت بپردازیم. از انتخاب موتور مناسب یا
                        دستبند
                        با کیفیت.
                    </p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-2">
                        <span class="text-gray-400 text-xs">۲ اردیبهشت ۱۴۰۵</span>
                        <div
                            class="h-10 hover:text-gray-900 rounded-lg flex items-center justify-center transition-colors px-6">
                            <a href="{{ route('article') }}"
                                class="text-black text-sm font-medium w-full h-full flex items-center justify-center">
                                مطالعه مقاله
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endfor

    </main>
</article>

@include('layout.footer')
