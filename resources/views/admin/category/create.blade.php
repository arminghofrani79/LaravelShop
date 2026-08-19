@section('title', 'افزودن دسته‌بندی | LaravelShop')
@include('admin.layout.side')


<div class="lg:col-span-3 flex flex-col gap-6">

    <!-- header -->
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">افزودن دسته‌بندی</h1>
    </div>

    <!-- main card -->
    <form action="{{ route('admin-store-category') }}" method="POST"
        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">
        @csrf
        <!-- header table -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    نام دسته‌بندی <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" placeholder="نام دسته‌بندی را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    وضعیت <span class="text-red-500">*</span>
                </label>
                <select name="status"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white appearance-none">
                    <option value="1">فعال</option>
                    <option value="0">غیرفعال</option>
                </select>
            </div>
        </div>


        <!-- دکمه‌ها -->
        <div class="flex gap-3 pt-2">
            <a href="{{ url()->previous() }}"
                class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center cursor-pointer">
                انصراف
            </a>
            <button type="submit"
                class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2.5 rounded-lg text-sm transition">
                ذخیره دسته‌بندی
            </button>
            <div>
                @error('name')
                    <p class="text-red-500 text-xl">{{ $message }}</p>
                @enderror
            </div>
        </div>

    </form>
</div>

</main>
@include('layout.footer')
