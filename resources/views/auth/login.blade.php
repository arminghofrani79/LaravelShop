@include('layout.header')

{{-- فرض بر این است که این ویو درون یک صفحه کامل یا لایه‌ی `layout` قرار می‌گیرد --}}
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-10 px-4">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 border border-gray-100">

        {{-- هدر فرم --}}
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">ورود به سایت</h2>
            <p class="text-sm text-gray-500 mt-1">برای استفاده از امکانات سایت، وارد شوید</p>
        </div>

        {{-- فرم ورود --}}
        <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-5">
            @csrf

            {{-- 1. فیلد ایمیل (email) --}}
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

            {{-- 2. فیلد رمز عبور (password) --}}
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

            {{-- 3. چک‌باکس «مرا به خاطر بسپار» (remember) --}}
            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember"
                        class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="text-sm text-gray-600">مرا به خاطر بسپار</span>
                </label>

                {{-- لینک فراموشی رمز عبور (اختیاری) --}}
                <a href="{{route('show-forgetpassword')}}" class="text-xs text-blue-600 hover:underline">
                    فراموشی رمز عبور؟
                </a>
            </div>

            {{-- دکمه ارسال --}}
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg text-sm transition shadow-sm mt-2">
                ورود
            </button>

            {{-- لینک بازگشت به ثبت‌نام --}}
            <div class="text-center text-xs text-gray-500 mt-2">
                حساب کاربری ندارید؟
                <a href="{{ route('show-register') }}" class="text-blue-600 hover:underline">ثبت‌نام کنید</a>
            </div>
        </form>
    </div>
</div>

@include('layout.footer')
