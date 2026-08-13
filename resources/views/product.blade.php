@include('layout.header')

<main class="bg-gray-50 max-w-7xl mx-auto px-4 py-8 flex flex-col">
    <div class="flex flex-col md:flex-row gap-3 md:gap-10">

        <div
            class="w-full md:w-1/2 flex flex-col gap-4 border-2 border-gray-200 rounded-2xl p-6 md:p-8 bg-gray-50 shadow-lg">

            <div>
                <h1 class="font-bold text-2xl md:text-3xl text-gray-800 pb-2">ساعت هوشمند شیائومی</h1>
                <p class="text-blue-600 font-bold text-2xl">
                    ۹,۹۰۰,۰۰۰ <span class="text-sm text-gray-400 font-normal">تومان</span>
                </p>
                <p class="text-sm text-gray-500 mt-4 leading-relaxed">
                    ساعت هوشمند شیائومی امکانات پیشرفته‌ای دارد و مناسب برای همراهی در زندگی سالم و هوشمند شماست.
                </p>
            </div>

            <div class="border-t-2 border-gray-200 pt-5">
                <div class="flex flex-wrap items-center gap-4">
                    <button
                        class="flex items-center justify-center gap-2 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2.5 px-6 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg w-2/3">
                        <img class="w-5 h-5 object-contain filter brightness-0 invert"
                            src="{{ asset('images/icons/buy.png') }}" alt="افزودن به سبد خرید">
                        افزودن به سبد خرید
                    </button>

                    <div class="flex items-center border-2 border-gray-300 rounded-lg overflow-hidden">
                        <button
                            class="bg-gray-200 hover:bg-gray-300 px-3 py-1.5 text-lg font-bold transition-colors">-</button>
                        <input type="number" value="1" min="1"
                            class="w-12 text-center border-x-2 border-gray-300 py-1.5 text-sm outline-none">
                        <button
                            class="bg-gray-200 hover:bg-gray-300 px-3 py-1.5 text-lg font-bold transition-colors">+</button>
                    </div>

                </div>
            </div>

        </div>


        <div
            class="w-full md:w-1/2 flex items-center justify-center border-2 border-gray-200 rounded-2xl p-4 bg-gray-50">
            <img class="w-full h-64 md:h-80 object-contain rounded-xl" src="{{ asset('images/products/watch1.jpeg') }}"
                alt="ساعت هوشمند شیائومی">
        </div>

    </div>

    <div class="mt-8">
        <h class="font-bold p-7 mb-4">محصولات مرتبط</h>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-3 mt-8">
            @for ($i = 1; $i <= 4; $i++)
                <div
                    class="flex flex-col bg-white rounded-2xl shadow-md hover:shadow-xl hover:scale-105 p-3 border border-gray-200 transition-all duration-300">
                    <div class="w-full h-40 overflow-hidden rounded-lg">

                        <img class="w-full h-full object-contain p-2" src="{{ asset('images/products/watch1.jpeg') }}"
                            alt="ساعت مدل ۱">
                    </div>
                    <h2 class="font-bold text-lg text-gray-800 mt-3 text-center line-clamp-1">ساعت مدل ۱</h2>
                    <p class="text-blue-600 font-bold text-xl mt-1 text-center">
                        ۱۲,۰۰۰,۰۰۰ <span class="text-sm text-gray-500 font-normal">تومان</span>
                    </p>
                </div>
            @endfor
        </div>
    </div>
</main>

@include('layout.footer')
