@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">مدیریت کاربران</h1>
    </div>

    {{-- cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- admins --}}
        <div class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-between">
            <div class="flex flex-col items-center text-center w-full">
                <div class="flex items-center justify-between w-full mb-2">
                    <span class="text-sm font-medium text-gray-700">مدیران</span>
                    <div class="w-10 h-10 bg-purple-50 rounded-full flex items-center justify-center text-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <span class="text-2xl font-bold text-gray-800">3</span>
                <span class="text-[10px] text-gray-400 mt-1">مدیر کل سیستم</span>
            </div>
        </div>

        {{-- active user --}}
        <div class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-between">
            <div class="flex flex-col items-center text-center w-full">
                <div class="flex items-center justify-between w-full mb-2">
                    <span class="text-sm font-medium text-gray-700">کاربران فعال</span>
                    <div class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <span class="text-2xl font-bold text-gray-800">24</span>
                <span class="text-[10px] text-gray-400 mt-1">کاربران با دسترسی فعال</span>
            </div>
        </div>

        {{-- all users --}}
        <div class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-between">
            <div class="flex flex-col items-center text-center w-full">
                <div class="flex items-center justify-between w-full mb-2">
                    <span class="text-sm font-medium text-gray-700">کل کاربران</span>
                    <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
                <span class="text-2xl font-bold text-gray-800">57</span>
                <span class="text-[10px] text-gray-400 mt-1">همه کاربران ثبت‌نام شده</span>
            </div>
        </div>
    </div>

    {{-- nav --}}
    <div
        class="flex flex-wrap gap-4 items-center justify-between p-4 bg-white rounded-xl border border-gray-200 shadow-sm">

        <div class="flex flex-wrap gap-4 w-full md:w-auto">
            {{-- search --}}
            <div class="relative w-full md:w-80">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <img class="w-4 h-4" src="{{ asset('images/icons/search.png') }}" alt="">
                </div>
                <input type="text" placeholder="جستجو بر اساس نام، ایمیل یا موبایل..."
                    class="block w-full pl-3 pr-10 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            {{-- status --}}
            <select
                class="w-full md:w-44 px-3 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                <option>همه وضعیت‌ها</option>
                <option>فعال</option>
                <option>غیرفعال</option>
            </select>
        </div>

        {{-- add ussr button --}}
        <a href="{{ route('admin-create-user') }}"
            class="w-full md:w-auto bg-gray-600 hover:bg-gray-700 text-white px-5 py-2.5 rounded-lg text-sm flex items-center justify-center gap-2 transition shadow-sm">
            افزودن کاربر
        </a>
    </div>

    {{-- users table --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 overflow-x-auto">
        <table class="w-full text-sm min-w-[700px]">
            <thead>
                <tr class="text-gray-500 border-b border-gray-100">
                    <th class="text-right pb-4 font-medium pl-4">کاربر</th>
                    <th class="text-center pb-4 font-medium">ایمیل</th>
                    <th class="text-center pb-4 font-medium">شماره موبایل</th>
                    <th class="text-center pb-4 font-medium">نقش</th>
                    <th class="text-center pb-4 font-medium">وضعیت</th>
                    <th class="text-center pb-4 font-medium">تاریخ عضویت</th>
                    <th class="text-center pb-4 font-medium">عملیات</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                {{-- row 1 --}}
                <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3 pl-4">
                        <img src="" alt="user"
                            class="w-8 h-8 rounded-full object-cover border border-gray-100">
                        <span class="font-medium text-gray-800 text-sm">علی رضایی</span>
                    </td>
                    <td class="py-4 text-center text-gray-600 text-xs">ali.rezaei@example.com</td>
                    <td class="py-4 text-center text-gray-600 text-xs">09123456789</td>
                    <td class="py-4 text-center">
                        <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-[10px] font-medium">مدیر</span>
                    </td>
                    <td class="py-4 text-center">
                        <span
                            class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-[10px] font-medium">فعال</span>
                    </td>
                    <td class="py-4 text-center text-gray-400 text-xs">۱۴۰۲/۰۱/۱۵</td>
                    <td class="py-4 text-center flex justify-center gap-2">
                        <a href="{{ route('admin-watch-user') }}"
                            class="w-7 h-7 flex items-center justify-center border border-gray-200 text-gray-600 hover:bg-blue-50 rounded-lg transition">
                            <img class="w-4 h-4" src="{{ asset('images/icons/eye.png') }}" alt="">
                        </a>
                        <button
                            class="w-7 h-7 flex items-center justify-center border border-gray-200 text-gray-500 hover:bg-red-50 rounded-lg transition">
                            <img class="w-4 h-4" src="{{ asset('images/icons/delete.png') }}" alt="">
                        </button>
                    </td>
                </tr>

                {{-- row 2 --}}
                <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3 pl-4">
                        <img src="" alt="user"
                            class="w-8 h-8 rounded-full object-cover border border-gray-100">
                        <span class="font-medium text-gray-800 text-sm">سارا موسوی</span>
                    </td>
                    <td class="py-4 text-center text-gray-600 text-xs">sara.mousavi@example.com</td>
                    <td class="py-4 text-center text-gray-600 text-xs">09351234567</td>
                    <td class="py-4 text-center">
                        <span
                            class="bg-gray-100 text-gray-600 px-2 py-0.5 rounded text-[10px] font-medium">کاربر</span>
                    </td>
                    <td class="py-4 text-center">
                        <span
                            class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-[10px] font-medium">فعال</span>
                    </td>
                    <td class="py-4 text-center text-gray-400 text-xs">۱۴۰۲/۰۲/۲۳</td>
                    <td class="py-4 text-center flex justify-center gap-2">
                        <a href="{{ route('admin-watch-user') }}
                            class="w-7 h-7 flex
                            items-center justify-center border border-gray-200 text-gray-600 hover:bg-blue-50 rounded-lg
                            transition">
                            <img class="w-4 h-4" src="{{ asset('images/icons/eye.png') }}" alt="">
                        </a>
                        <button
                            class="w-7 h-7 flex items-center justify-center border border-gray-200 text-gray-500 hover:bg-red-50 rounded-lg transition">
                            <img class="w-4 h-4" src="{{ asset('images/icons/delete.png') }}" alt="">
                        </button>
                    </td>
                </tr>

                {{-- row 3 --}}
                <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3 pl-4">
                        <img src="" alt="user"
                            class="w-8 h-8 rounded-full object-cover border border-gray-100">
                        <span class="font-medium text-gray-800 text-sm">فاطمه احمدی</span>
                    </td>
                    <td class="py-4 text-center text-gray-600 text-xs">fatemeh.ahmadi@example.com</td>
                    <td class="py-4 text-center text-gray-600 text-xs">09912345678</td>
                    <td class="py-4 text-center">
                        <span
                            class="bg-gray-100 text-gray-600 px-2 py-0.5 rounded text-[10px] font-medium">کاربر</span>
                    </td>
                    <td class="py-4 text-center">
                        <span
                            class="bg-red-100 text-red-700 px-2 py-0.5 rounded text-[10px] font-medium">غیرفعال</span>
                    </td>
                    <td class="py-4 text-center text-gray-400 text-xs">۱۴۰۲/۰۴/۱۱</td>
                    <td class="py-4 text-center flex justify-center gap-2">
                        <a href="{{ route('admin-watch-user') }}
                            class="w-7 h-7 flex
                            items-center justify-center border border-gray-200 text-gray-600 hover:bg-blue-50 rounded-lg
                            transition">
                            <img class="w-4 h-4" src="{{ asset('images/icons/eye.png') }}" alt="">
                        </a>
                        <button
                            class="w-7 h-7 flex items-center justify-center border border-gray-200 text-gray-500 hover:bg-red-50 rounded-lg transition">
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
