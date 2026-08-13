@include('admin.layout.side')



<!-- ستون سمت چپ: محتوای اصلی فرم افزودن محصول -->
<div class="lg:col-span-3 flex flex-col gap-6">

    <!-- header -->
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">ویرایش محصول</h1>
    </div>

    <!-- main card-->
    <form class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">

        <!-- product properity -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    نام محصول <span class="text-red-500">*</span>
                </label>
                <input type="text" placeholder="نام محصول خود را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    دسته‌بندی <span class="text-red-500">*</span>
                </label>
                <select
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none">
                    <option value="">انتخاب دسته‌بندی</option>
                    <option value="1">لپ‌تاپ</option>
                    <option value="2">گوشی موبایل</option>
                    <option value="3">هدفون</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">برند</label>
                <input type="text" placeholder="نام برند را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>
        </div>

        <!--price-offer product-->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    قیمت (تومان) <span class="text-red-500">*</span>
                </label>
                <input type="text" placeholder="مثال: ۲,۷۸۰,۰۰۰"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    موجودی <span class="text-red-500">*</span>
                </label>
                <input type="text" placeholder="مثال: ۱۳"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">تخفیف (%)</label>
                <input type="text" placeholder="مثال: ۱۰"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>
        </div>

        <!-- special status product -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    وضعیت <span class="text-red-500">*</span>
                </label>
                <select
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none">
                    <option value="active">فعال</option>
                    <option value="inactive">غیرفعال</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700 mb-1.5">محصول ویژه</label>
                <div class="flex items-center gap-3">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div
                            class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-600">
                        </div>
                    </label>
                    <span class="text-xs text-gray-500">به عنوان محصول ویژه نمایش داده شود</span>
                </div>
            </div>
        </div>

        <!-- upload images -->
        <div class="flex flex-col gap-2">
            <label class="text-sm text-gray-700">
                تصاویر محصول <span class="text-red-500">*</span>
            </label>
            <input type="file"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer"
                multiple>
            <p class="text-[10px] text-gray-400 mt-1">فرمت‌های مجاز: JPG, PNG, WEBP | حداکثر حجم: 2MB</p>
        </div>

        <!-- explain section product -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">توضیحات کامل</label>
                <div class="border border-gray-200 rounded-lg overflow-hidden flex flex-col">
                    <!-- text -->
                    <textarea rows="4" placeholder="توضیحات کامل محصول را وارد کنید..."
                        class="w-full p-3 text-sm border-0 focus:ring-0 resize-none min-h-[120px] placeholder-gray-400"></textarea>
                </div>
            </div>

        </div>

        {{-- buttons --}}
        <div class="flex gap-3 pt-2">
            <a href="{{ url()->previous() }}"
                class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-6 py-2.5 rounded-lg text-sm transition">
                انصراف
            </a>
            <button type="submit"
                class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2.5 rounded-lg text-sm transition">
                ذخیره محصول
            </button>
        </div>

    </form>
</div>

</main>

@include('layout.footer')
