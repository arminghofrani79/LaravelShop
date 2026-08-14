@include('profile.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="flex flex-col items-center w-full gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">ویرایش آدرس </h1>
    </div>

    {{-- main form --}}
    <form class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">

        @csrf

        {{-- part1: rec info --}}
        <div class="pb-4 border-b border-gray-100">
            <div class="flex items-center gap-2 mb-4">
                <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                <h2 class="text-base font-bold text-gray-800">اطلاعات گیرنده</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        نام و نام خانوادگی <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="علی محمدی"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        شماره موبایل <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="0912 123 4567"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                </div>
            </div>

            <div class="mt-5 w-full md:w-1/2">
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">کد ملی (اختیاری)</label>
                    <input type="text" placeholder="4567123091"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                </div>
            </div>
        </div>


        <div class="pb-4 border-b border-gray-100">
            <div class="flex items-center gap-2 mb-4">
                <img class="w-4 h-4" src="{{ asset('images/icons/location.png') }}" alt="">
                <h2 class="text-base font-bold text-gray-800">اطلاعات آدرس</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                {{-- استان --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        استان <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="تهران"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                </div>

                {{-- شهر --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        شهر <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="تهران"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                </div>

                {{-- منطقه / محله --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">منطقه / محله (اختیاری)</label>
                    <input type="text" placeholder="تهرانپارس"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                </div>

                {{-- کد پستی --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        کد پستی <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="1589674711"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                </div>
            </div>

            {{-- آدرس دقیق (تمام عرض) --}}
            <div class="mt-5 flex flex-col gap-1.5">
                <label class="text-sm text-gray-600 text-right">
                    آدرس دقیق <span class="text-red-500">*</span>
                </label>
                <input type="text"
                    placeholder="تهران، خیابان ولیعصر، پایین‌تر از میدان ونک، خیابان شهید برادران مظفر، پلاک ۲۱۰، طبقه ۳، واحد ۱۲"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
            </div>

            {{-- پلاک / واحد / طبقه (تمام عرض) --}}
            <div class="mt-5 flex flex-col gap-1.5">
                <label class="text-sm text-gray-600 text-right">پلاک / واحد / طبقه (اختیاری)</label>
                <input type="text" placeholder="پلاک ۲۱۰، طبقه ۳، واحد ۱۲"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
            </div>
        </div>

        {{-- بخش 3: تنظیمات پیش‌فرض --}}
        <div class="flex items-center justify-between py-2">
            <div class="flex items-center gap-2">
                <img class="w-4 h-4" src="{{ asset('images/icons/status.png') }}" alt="">
                <span class="text-sm font-medium text-gray-700">پیش‌فرض</span>
            </div>

            <div class="flex items-center gap-3">
                <span class="text-xs text-gray-500">این آدرس به عنوان آدرس پیش‌فرض انتخاب شود</span>
                {{-- سوئیچ چرخشی --}}
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked>
                    <div
                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500">
                    </div>
                </label>
            </div>
        </div>

        {{-- بخش 4: دکمه‌های عملیات --}}
        <div class="flex gap-3 pt-4 mt-2 border-t border-gray-100">
            <a href="{{ route('user-address') }}" type="button"
                class="flex-1 sm:flex-none bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center gap-2 cursor-pointer">
                انصراف
            </a>
            <button type="submit"
                class="flex-1 sm:flex-none bg-slate-700 hover:bg-slate-800 text-white px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                ذخیره آدرس
            </button>
        </div>

    </form>
</div>

</main>
@include('layout.footer')
