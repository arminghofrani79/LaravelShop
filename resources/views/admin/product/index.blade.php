@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- search nav --}}
    <div
        class="flex flex-col md:flex-row flex-wrap gap-4 items-center justify-between p-4 bg-white rounded-xl shadow-sm">

        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
            <!-- search -->
            <div class="relative w-full md:w-64">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <img class="w-4 h-4" src="{{ asset('images/icons/search.png') }}" alt="">
                </div>
                <input type="text" placeholder="جستجو برای نام محصول..."
                    class="block w-full pr-10 pl-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            {{-- category filter --}}
            <select
                class="w-full md:w-44 px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                <option>همه دسته‌بندی‌ها</option>
                <option>هدفون و هدرفری</option>
                <option>ساعت هوشمند</option>
                <option>لپ‌تاپ</option>
            </select>

            <!-- status filter -->
            <select
                class="w-full md:w-40 px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                <option>همه وضعیت‌ها</option>
                <option>فعال</option>
                <option>غیرفعال</option>
            </select>
        </div>

        <!-- add product button -->
        <a href="{{ route('admin-create-product') }}"
            class="w-full md:w-auto bg-gray-600 hover:bg-gray-700 text-white px-5 py-2.5 rounded-lg text-sm flex items-center justify-center gap-2 transition shadow-sm">
            افزودن محصول
        </a>
    </div>

    <!-- products table -->
    <div class="bg-white rounded-xl shadow-sm p-5 overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-center pb-4 font-medium min-w-[150px]">محصول</th>
                    <th class="text-center pb-4 font-medium min-w-[100px]">دسته‌بندی</th>
                    <th class="text-center pb-4 font-medium min-w-[110px]">قیمت (تومان)</th>
                    <th class="text-center pb-4 font-medium min-w-[80px]">موجودی</th>
                    <th class="text-center pb-4 font-medium min-w-[90px]">وضعیت</th>
                    <th class="text-center pb-4 font-medium min-w-[120px]">عملیات</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                <!-- row 1 -->
                <tr class="border-b border-gray-50">
                    <td class="py-4 flex items-center gap-3 justify-start">
                        <img src="https://picsum.photos/id/21/50/50" alt="product"
                            class="w-10 h-10 object-contain rounded border border-gray-100 bg-gray-50">
                        <span class="font-medium text-gray-800 text-sm text-right">WH-1000XM5</span>
                    </td>
                    <td class="py-4 text-center text-xs">هدفون و هدرفری</td>
                    <td class="py-4 text-center font-medium text-gray-800">۲,۷۸۰,۰۰۰</td>
                    <td class="py-4 text-center">۱۲</td>
                    <td class="py-4 text-center"><span
                            class="bg-green-100 text-green-700 px-3 py-1 rounded-lg text-[10px] font-medium">فعال</span>
                    </td>
                    <td class="py-4 text-center flex justify-center gap-2">
                        <a href="{{ route('admin-edit-product') }}"
                            class="w-8 h-8 flex items-center justify-center border border-blue-100 text-blue-600 hover:bg-blue-50 rounded-lg transition">
                            <img class="h-4 w-4" src="{{ asset('images/icons/edit.png') }}" alt="">
                        </a>

                        <button
                            class="w-8 h-8 flex items-center justify-center border border-red-100 text-red-500 hover:bg-red-50 rounded-lg transition">
                            <img class="h-4 w-4" src="{{ asset('images/icons/delete.png') }}" alt="">
                        </button>
                    </td>
                </tr>

                <!-- row 2 -->
                <tr class="border-b border-gray-50">
                    <td class="py-4 flex items-center gap-3 justify-start">
                        <img src="https://picsum.photos/id/96/50/50" alt="product"
                            class="w-10 h-10 object-contain rounded border border-gray-100 bg-gray-50">
                        <span class="font-medium text-gray-800 text-sm text-right">Galaxy Watch 6</span>
                    </td>
                    <td class="py-4 text-center text-xs">ساعت هوشمند</td>
                    <td class="py-4 text-center font-medium text-gray-800">۴,۹۹۰,۰۰۰</td>
                    <td class="py-4 text-center">۱۸</td>
                    <td class="py-4 text-center"><span
                            class="bg-red-100 text-red-700 px-3 py-1 rounded-lg text-[10px] font-medium">غیر فعال</span>
                    </td>
                    <td class="py-4 text-center flex justify-center gap-2">
                        <a href="{{ route('admin-edit-product') }}"
                            class="w-8 h-8 flex items-center justify-center border border-blue-100 text-blue-600 hover:bg-blue-50 rounded-lg transition">
                            <img class="h-4 w-4" src="{{ asset('images/icons/edit.png') }}" alt="">
                        </a>
                        <button
                            class="w-8 h-8 flex items-center justify-center border border-red-100 text-red-500 hover:bg-red-50 rounded-lg transition">
                            <img class="h-4 w-4" src="{{ asset('images/icons/delete.png') }}" alt="">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- بخش 3: صفحه‌بندی و تعداد کل -->


</div>


</div>

</main>

@include('layout.footer')
