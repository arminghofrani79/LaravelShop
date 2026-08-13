@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800"> مشاهده کاربر </h1>
    </div>

    {{-- form --}}
    <form class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">

        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    نام <span class="text-red-500">*</span>
                </label>
                <input type="text" placeholder="نام کاربر را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    نام خانوادگی <span class="text-red-500">*</span>
                </label>
                <input type="text" placeholder="نام خانوادگی کاربر را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    ایمیل <span class="text-red-500">*</span>
                </label>
                <input type="email" placeholder="example@email.com"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    شماره موبایل <span class="text-red-500">*</span>
                </label>
                <input type="text" placeholder="مثال: 09123456789"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    نقش کاربری <span class="text-red-500">*</span>
                </label>
                <select
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none cursor-pointer">
                    <option value="user">کاربر</option>
                    <option value="author">نویسنده</option>
                    <option value="admin">مدیر</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    وضعیت <span class="text-red-500">*</span>
                </label>
                <select
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none cursor-pointer">
                    <option value="active">فعال</option>
                    <option value="inactive">غیرفعال</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    رمز عبور <span class="text-red-500">*</span>
                </label>
                <input type="password" placeholder="رمز عبور را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    تکرار رمز عبور <span class="text-red-500">*</span>
                </label>
                <input type="password" placeholder="رمز عبور را مجدداً وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>
        </div>

        <div class="flex flex-col gap-2">
            <label class="text-sm text-gray-700">تصویر پروفایل</label>
            <input type="file"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer border border-gray-200 rounded-lg bg-white">
            <p class="text-[10px] text-gray-400 mt-0.5">فرمت‌های مجاز: JPG, PNG, WEBP | حداکثر حجم: 2MB</p>
        </div>

        <div class="flex gap-3 pt-2 border-t border-gray-100">
            <a href="{{ url()->previous() }}"
                class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center cursor-pointer">
                انصراف
            </a>
            <button type="submit"
                class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2.5 rounded-lg text-sm transition">
                افزودن کاربر
            </button>
        </div>

    </form>
</div>

</main>
@include('layout.footer')
