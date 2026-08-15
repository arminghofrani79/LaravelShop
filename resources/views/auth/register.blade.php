@include('layout.header')

<div class="min-h-screen flex items-center justify-center bg-gray-100 py-10 px-4">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 border border-gray-100">

        {{-- هدر فرم --}}
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">ثبت‌نام در سایت</h2>
            <p class="text-sm text-gray-500 mt-1">برای استفاده از امکانات سایت، ثبت‌نام کنید</p>
        </div>

        {{-- فرم ثبت‌نام --}}
        <form action="{{ route('register') }}" method="POST" class="flex flex-col gap-5">
            @csrf

            {{-- 1. فیلد نام و نام خانوادگی (name) --}}
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-medium text-gray-700">
                    نام و نام خانوادگی <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="نام خود را وارد کنید..."
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all bg-white placeholder-gray-400">
                @error('name')
                    <p class="text-sm text-red-500 mt-0.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- 2. فیلد ایمیل (email) --}}
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-medium text-gray-700">
                    ایمیل <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="example@email.com"
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all bg-white placeholder-gray-400">
                @error('email')
                    <p class="text-sm text-red-500 mt-0.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- 3. فیلد رمز عبور (password) --}}
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-medium text-gray-700">
                    رمز عبور <span class="text-red-500">*</span>
                </label>
                <input type="password" name="password" placeholder="رمز عبور خود را وارد کنید..."
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all bg-white placeholder-gray-400">
                @error('password')
                    <p class="text-sm text-red-500 mt-0.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- 4. فیلد تکرار رمز عبور (password_confirmation) --}}
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-medium text-gray-700">
                    تکرار رمز عبور <span class="text-red-500">*</span>
                </label>
                <input type="password" name="password_confirmation" placeholder="رمز عبور را مجدداً وارد کنید..."
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all bg-white placeholder-gray-400">
            </div>

            {{-- دکمه ارسال --}}
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg text-sm transition shadow-sm mt-2">
                ثبت‌نام
            </button>

            {{-- لینک بازگشت به ورود (اختیاری) --}}
            <div class="text-center text-xs text-gray-500 mt-2">
                قبلاً ثبت‌نام کرده‌اید؟
                <a href="{{ route('show-login') }}" class="text-blue-600 hover:underline">وارد شوید</a>
            </div>
        </form>
    </div>
</div>
@include('layout.footer')
