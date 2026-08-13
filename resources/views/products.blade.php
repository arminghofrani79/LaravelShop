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
                <label class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition-colors">
                    <img class="rounded-md w-6 h-6 object-contain" src="{{ asset('images/icons/watch.png') }}"
                        alt="ساعت مردانه">
                    <span class="text-sm text-gray-700">ساعت مردانه</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition-colors">
                    <img class="rounded-md w-6 h-6 object-contain" src="{{ asset('images/icons/watch.png') }}"
                        alt="ساعت زنانه">
                    <span class="text-sm text-gray-700">ساعت زنانه</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition-colors">
                    <img class="rounded-md w-6 h-6 object-contain" src="{{ asset('images/icons/watch.png') }}"
                        alt="ساعت کودکانه">
                    <span class="text-sm text-gray-700">ساعت کودکانه</span>
                </label>
            </div>

            <div class="flex flex-col gap-2 p-4 bg-white rounded-xl shadow-md border border-gray-200">
                <h2 class="font-bold text-lg text-gray-800 border-b border-gray-200 pb-2 mb-1">محدوده قیمت</h2>
                <div class="flex items-center gap-2">
                    <input type="number" placeholder="از" class="w-full p-2 border border-gray-300 rounded-lg text-sm">
                    <span class="text-gray-400">تا</span>
                    <input type="number" placeholder="تا" class="w-full p-2 border border-gray-300 rounded-lg text-sm">
                </div>
                <button
                    class="w-full bg-gray-600 hover:bg-gray-700 text-white text-sm font-bold py-2 rounded-lg transition-colors">
                    اعمال فیلتر
                </button>
            </div>

            <div class="flex flex-col gap-2 p-4 bg-white rounded-xl shadow-md border border-gray-200">
                <h2 class="font-bold text-lg text-gray-800 border-b border-gray-200 pb-2 mb-1">وضعیت موجودی</h2>
                <label class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition-colors">
                    <input type="checkbox" class="w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                    <span class="text-sm text-gray-700">فقط محصولات موجود</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition-colors">
                    <input type="checkbox" class="w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                    <span class="text-sm text-gray-700">محصولات با تخفیف</span>
                </label>
            </div>
        </aside>

        {{-- products grid --}}
        <section class="flex-1">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 8; $i++)
                    <div
                        class="flex flex-col bg-white rounded-2xl shadow-md hover:shadow-xl hover:scale-105 p-3 border border-gray-200 transition-all duration-300">
                        <div class="relative w-full h-56 overflow-hidden rounded-lg">

                            <img class="w-full h-full object-contain p-2"
                                src="{{ asset('images/products/watch1.jpeg') }}" alt="ساعت مدل ۱">
                            <div
                                class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-lg z-10">
                                ۲۰٪ تخفیف
                            </div>
                        </div>
                        <h2 class="font-bold text-lg text-gray-800 mt-3 text-center line-clamp-1">ساعت مدل ۱</h2>
                        <p class="text-blue-600 font-bold text-xl mt-1 text-center">
                            ۱۲,۰۰۰,۰۰۰ <span class="text-sm text-gray-500 font-normal">تومان</span>
                        </p>
                        <button
                            class="flex items-center justify-center gap-2 w-full bg-gray-600 hover:bg-gray-700 text-white font-bold py-2.5 px-4 rounded-lg transition-all duration-200 mt-3 shadow-md hover:shadow-lg">
                            <img class="w-5 h-5 object-contain filter brightness-0 invert"
                                src="{{ asset('images/icons/buy.png') }}" alt="افزودن به سبد خرید">
                            افزودن به سبد خرید
                        </button>
                    </div>
                @endfor
            </div>
        </section>
    </div>
</main>

@include('layout.footer')
