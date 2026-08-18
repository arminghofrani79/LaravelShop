@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- categories header --}}
    <div class="w-full flex flex-col items-center gap-2 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">مدیریت دسته‌بندی‌ها</h1>
    </div>

    {{-- add category button --}}
    <div class="flex justify-end w-full">
        <a href="{{ route('admin-create-category') }}"
            class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-2.5 rounded-lg text-sm flex items-center gap-2 transition shadow-sm">
            افزودن دسته‌بندی
        </a>
    </div>

    {{-- search nav --}}
    <div
        class="flex flex-col md:flex-row gap-4 items-center justify-between p-4 bg-white rounded-xl border border-gray-200 shadow-sm">

        <!-- search -->
        <div class="relative w-full md:w-80">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <img class="w-4 h-4" src="{{ asset('images/icons/search.png') }}" alt="">
            </div>
            <input type="text" placeholder="جستجو در دسته‌بندی‌ها..."
                class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- filter -->
        <select
            class="w-full md:w-40 px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
            <option>همه</option>
            <option>فعال</option>
            <option>غیرفعال</option>
        </select>

        <!-- filter bottun -->
        <button
            class="w-full md:w-auto flex items-center justify-center gap-2 px-4 py-2 border border-gray-200 bg-white rounded-lg text-sm text-gray-700 hover:bg-gray-50 transition">
            <img class="w-4 h-4" src="{{ asset('images/icons/filter.png') }}" alt="">
            فیلتر
        </button>
    </div>

    <!-- categories table -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-right pb-4 font-medium pl-4">نام دسته‌بندی</th>
                    <th class="text-center pb-4 font-medium">اسلاگ</th>
                    <th class="text-center pb-4 font-medium">وضعیت</th>
                    <th class="text-center pb-4 font-medium">عملیات</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                @foreach ($categories as $category)
                    <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                        <td class="py-4 flex items-center gap-3 pl-4">
                            <div class="w-8 h-8 bg-gray-50 text-gray-600 rounded-lg flex items-center justify-center">
                                <img class="w-5 h-5" src="{{ asset('images/icons/watch.png') }}" alt="">
                            </div>
                            <span class="font-medium text-gray-800">{{ $category->name }}</span>
                        </td>
                        <td class="py-4 text-center text-gray-600">{{ $category->slug }}</td>
                        <td class="py-4 text-center">
                            <span
                                class="{{ $category->status == 1 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }} px-3 py-1 rounded-md text-xs font-medium">{{ $category->status == 1 ? 'فعال' : 'غیر فعال' }}</span>
                        </td>
                        <td class="py-4 text-center flex justify-center gap-2">
                            <a href="{{ route('admin-edit-category', ['category' => $category->id]) }}"
                                class="w-8 h-8 flex items-center justify-center border border-gray-200 text-gray-600 hover:bg-blue-50 rounded-lg transition">
                                <img class="w-4 h-4" src="{{ asset('images/icons/edit.png') }}" alt="">
                            </a>
                            <form method="POST"
                                action="{{ route('admin-delete-category', ['category' => $category->id]) }}"
                                class="w-8 h-8 flex items-center justify-center border border-gray-200 text-gray-500 hover:bg-red-50 rounded-lg transition">

                                @csrf
                                @method('DELETE')

                                <button type="button" class="delete-btn" data-title="{{ $category->name }}">
                                    <img class="w-4 h-4" src="{{ asset('images/icons/delete.png') }}" alt="">
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- بخش صفحه‌بندی -->


</div>


</main>

@include('layout.footer')
