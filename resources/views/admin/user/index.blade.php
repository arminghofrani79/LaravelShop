@section('title', 'مدیریت کاربران | LaravelShop')
@include('admin.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">مدیریت کاربران</h1>
    </div>


    {{-- nav --}}
    <div
        class="flex flex-wrap gap-4 items-center justify-between p-4 bg-white rounded-xl border border-gray-200 shadow-sm">

        <div class="flex flex-wrap gap-4 w-full md:w-auto">
            {{-- search --}}
            <div class="relative w-full md:w-80">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <img class="w-4 h-4" src="{{ asset('images/icons/search.webp') }}" alt="">
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
                    <th class="text-center pb-4 font-medium">نقش</th>
                    <th class="text-center pb-4 font-medium">وضعیت</th>
                    <th class="text-center pb-4 font-medium">تاریخ عضویت</th>
                    <th class="text-center pb-4 font-medium">عملیات</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                @foreach ($users as $user)
                    <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                        <td class="py-4 flex items-center gap-3 pl-4">
                            <img src="{{ asset('images/icons/profile.webp') }}" alt="user"
                                class="w-8 h-8 rounded-full object-cover border border-gray-100">
                            <span class="font-medium text-gray-800 text-sm">{{ $user->name }}</span>
                        </td>
                        <td class="py-4 text-center text-gray-600 text-xs">{{ $user->email }}</td>
                        <td class="py-4 text-center">
                            <span
                                class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-[10px] font-medium">{{ $user->is_admin ? 'مدیر' : 'کاربر' }}</span>
                        </td>
                        <td class="py-4 text-center">
                            <span
                                class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-[10px] font-medium">فعال</span>
                        </td>
                        <td class="py-4 text-center text-gray-400 text-xs">{{ $user->created_at->format('Y/m/d') }}</td>
                        <td class="py-4 text-center flex justify-center gap-2">
                            <a href="{{ route('admin-watch-user', $user->id) }}"
                                class="w-7 h-7 flex items-center justify-center border border-gray-200 text-gray-600 hover:bg-blue-50 rounded-lg transition">
                                <img class="w-4 h-4" src="{{ asset('images/icons/eye.webp') }}" alt="">
                            </a>
                            <form method="POST" action="{{ route('admin-destroy-user', ['user' => $user->id]) }}"
                                class="w-7 h-7 flex items-center justify-center border border-gray-200 text-gray-500 hover:bg-red-50 rounded-lg transition">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="delete-btn" data-title="{{ $user->name }}"><img
                                        class=" cursor-pointer w-4 h-4" src="{{ asset('images/icons/delete.webp') }}"
                                        alt=""></button>
                            </form>
                        </td>
                    </tr>
                @endforeach






            </tbody>
        </table>
    </div>

    {{-- بخش 4: صفحه‌بندی --}}


</div>

</main>
@include('layout.footer')
