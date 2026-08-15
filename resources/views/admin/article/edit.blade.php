@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">ویرایش مقاله</h1>
    </div>

    {{-- main --}}
    <form enctype="multipart/form-data" method="POST"
        action="{{ route('admin-update-article', ['article' => $article->id]) }}"
        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">
        @method('PUT')
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    عنوان مقاله <span class="text-red-500">*</span>
                </label>
                <input value="{{ $article->title }}" name="title" type="text"
                    placeholder="عنوان مقاله را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
                <div>
                    @error('title')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- special status article -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end">
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
                <div>
                    @error('status')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">تصویر شاخص مقاله</label>

                <input type="file" name="image"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer border border-gray-200 rounded-lg bg-white">
                <p class="text-[10px] text-gray-400 mt-0.5">فرمت‌های مجاز: JPG, PNG, WEBP | حداکثر حجم: 2MB</p>
            </div>
            <div>
                @error('image')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-col gap-2">
            <label class="text-sm text-gray-700">
                محتوای مقاله <span class="text-red-500">*</span>
            </label>
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <textarea name="content" rows="6" placeholder="متن اصلی مقاله را در اینجا بنویسید..."
                    class="w-full p-4 text-sm border-0 focus:ring-0 resize-none min-h-[150px] placeholder-gray-400 w-full">
                {{ old('content', $article->content) }}</textarea>

            </div>
            <div>
                @error('content')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex gap-3 pt-2 border-t border-gray-100">
            <a href="{{ route('adminarticles') }}"
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
