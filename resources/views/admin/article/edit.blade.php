@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800"> ویرایش مقاله </h1>
    </div>

    {{-- main --}}
    <form class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    عنوان مقاله <span class="text-red-500">*</span>
                </label>
                <input type="text" placeholder="عنوان مقاله را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    دسته‌بندی <span class="text-red-500">*</span>
                </label>
                <select
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none cursor-pointer">
                    <option value="">انتخاب دسته‌بندی</option>
                    <option value="1">آموزش</option>
                    <option value="2">اخبار</option>
                    <option value="3">راهنمای خرید</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">نویسنده</label>
                <select
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none cursor-pointer">
                    <option value="">انتخاب نویسنده</option>
                    <option value="1">علی محمدی</option>
                    <option value="2">سارا کریمی</option>
                    <option value="3">مدیریت سایت</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">تصویر شاخص مقاله</label>

                <input type="file"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer border border-gray-200 rounded-lg bg-white">
                <p class="text-[10px] text-gray-400 mt-0.5">فرمت‌های مجاز: JPG, PNG, WEBP | حداکثر حجم: 2MB</p>
            </div>

        </div>

        <div class="flex flex-col gap-2">
            <label class="text-sm text-gray-700">
                محتوای مقاله <span class="text-red-500">*</span>
            </label>
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <textarea rows="6" placeholder="متن اصلی مقاله را در اینجا بنویسید..."
                    class="w-full p-4 text-sm border-0 focus:ring-0 resize-none min-h-[150px] placeholder-gray-400 w-full"></textarea>
            </div>
        </div>

        <div class="flex gap-3 pt-2 border-t border-gray-100">
            <a href="{{ url()->previous() }}"
                class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center cursor-pointer">
                انصراف
            </a>
            <button type="submit"
                class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2.5 rounded-lg text-sm transition">
                انتشار مقاله
            </button>
        </div>

    </form>
</div>

</main>
@include('layout.footer')
