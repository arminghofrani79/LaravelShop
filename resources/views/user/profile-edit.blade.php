@section('title', 'ویرایش پروفایل | LaravelShop')
@include('user.layout.side')
<div class="flex flex-col gap-6 lg:col-span-4">
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">
        <form action="{{ route('user-profile-update') }}" method="POST">
            @csrf
            @method('PUT')
            {{-- header --}}
            <div class="flex items-center gap-2 pb-4 border-b border-gray-100">
                <img class="h-4 w-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                <h2 class="text-lg font-bold text-gray-800">ویرایش اطلاعات حساب</h2>
            </div>

            {{-- name --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-500 font-medium text-right">نام</label>
                    <input name="name" type="text" value="{{ $user->name, old('name') }}"
                        class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-500 font-medium text-right">ایمیل</label>
                    <input type="email" name="email" value="{{ $user->email, old('email') }}"
                        class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
                </div>
            </div>
            @error('name')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror

    </div>
    <div class="flex flex-wrap items-center justify-between gap-4 mt-6 pt-6 border-t border-gray-100">

        <button type="submit"
            class="flex items-center gap-2 bg-gray-700 hover:bg-gray-800 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition-colors duration-200 shadow-sm hover:shadow-md">
            <img class="w-4 h-4" src="{{ asset('images/icons/edit.webp') }}" alt="">
            ویرایش اطلاعات
        </button>

        <a href="{{ route('user-edit-password-profile') }}"
            class="flex items-center gap-2 text-gray-600 hover:text-gray-800 text-sm font-medium transition-colors duration-200 hover:underline">
            <img class="w-4 h-4" src="{{ asset('images/icons/setting.webp') }}" alt="">
            ویرایش رمز عبور
        </a>

    </div>




    </form>
</div>
</div>

</main>
@include('layout.footer')
