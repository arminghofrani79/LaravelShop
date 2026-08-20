@section('title', 'ویرایش کاربر | LaravelShop')
@include('admin.layout.side')

<div class="flex flex-col gap-6 lg:col-span-4">

    {{-- header --}}
    <div class="w-full flex flex-col items-center gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">ویرایش کاربر</h1>
    </div>

    {{-- form --}}
    <form method="POST" action="{{ route('admin-update-user', ['user' => $user->id]) }}"
        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    نام <span class="text-red-500">*</span>
                </label>
                <input value="{{ old('name', $user->name) }}" name="name" type="text"
                    placeholder="نام کاربر را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
                @error('name')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    ایمیل <span class="text-red-500">*</span>
                </label>
                <input value="{{ old('email', $user->email) }}" name="email" type="email"
                    placeholder="example@email.com"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
                @error('email')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    رمز عبور <span class="text-red-500">*</span>
                </label>
                <input name="password" type="password" placeholder="رمز عبور را وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
                @error('password')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm text-gray-700">
                    تکرار رمز عبور <span class="text-red-500">*</span>
                </label>
                <input name="password_confirmation" type="password" placeholder="رمز عبور را مجدداً وارد کنید..."
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400">
                @error('password_confirmation')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>



        <div class="flex gap-3 pt-2 border-t border-gray-100">
            <a href="{{ route('adminusers') }}"
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
