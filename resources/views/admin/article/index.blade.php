@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">مدیریت مقالات</h1>
    </div>


    {{-- search bar --}}
    <div
        class="flex flex-wrap gap-4 items-center justify-between p-4 bg-white rounded-xl border border-gray-200 shadow-sm">

        <div class="flex flex-wrap gap-4 w-full md:w-auto">
            {{-- search --}}
            <div class="relative w-full md:w-64">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <img class="w-4 h-4" src="{{ asset('images/icons/search.png') }}" alt="">
                </div>
                <input type="text" placeholder="جستجو در مقالات..."
                    class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            {{-- category filter --}}
            <select
                class="w-full md:w-44 px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                <option>همه دسته‌بندی‌ها</option>
                <option>اخبار</option>
                <option>آموزش</option>
                <option>راهنمای خرید</option>
            </select>
        </div>

        {{-- add article button --}}
        <a href="{{ route('admin-create-article') }}"
            class="w-full md:w-auto bg-gray-600 hover:bg-gray-700 text-white px-5 py-2.5 rounded-lg text-sm flex items-center justify-center gap-2 transition shadow-sm">
            افزودن مقاله
        </a>
    </div>

    {{-- rticle table --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 overflow-x-auto">
        <table class="w-full text-sm min-w-[600px]">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-right pb-4 font-medium pl-4">عنوان مقاله</th>
                    <th class="text-center pb-4 font-medium">دسته‌بندی</th>
                    <th class="text-center pb-4 font-medium">نویسنده</th>
                    <th class="text-center pb-4 font-medium">وضعیت</th>
                    <th class="text-center pb-4 font-medium">عملیات</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                {{-- row 1 --}}
                <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3 pl-4">
                        <img src="https://picsum.photos/id/10/50/50" alt="article"
                            class="w-10 h-10 object-cover rounded border border-gray-100 bg-gray-50">
                        <span class="font-medium text-gray-800 text-sm">راهنمای خرید لپ‌تاپ مناسب برای
                            برنامه‌نویسان</span>
                    </td>
                    <td class="py-4 text-center text-gray-600 text-xs">آموزش</td>
                    <td class="py-4 text-center text-gray-600 text-xs">علی محمدی</td>
                    <td class="py-4 text-center">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded text-[10px] font-medium">انتشار
                            یافته</span>
                    </td>
                    <td class="py-4 text-center flex justify-center gap-2">
                        <a href="{{ route('admin-edit-article') }}"
                            class="w-8 h-8 flex items-center justify-center border border-gray-200 text-gray-600 hover:bg-blue-50 rounded-lg transition">
                            <img class="w-4 h-4" src="{{ asset('images/icons/edit.png') }}" alt="">
                        </a>
                        <button
                            class="w-8 h-8 flex items-center justify-center border border-gray-200 text-gray-500 hover:bg-red-50 rounded-lg transition">
                            <img class="w-4 h-4" src="{{ asset('images/icons/delete.png') }}" alt="">
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- بخش 4: صفحه‌بندی --}}

</div>

</main>
@include('layout.footer')
