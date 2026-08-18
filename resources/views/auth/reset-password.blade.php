@include('layout.header')

<main class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4">

    <form action="{{ route('password.update') }}" method="POST"
        class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 border border-gray-100">

        @csrf

        {{-- توکن مخفی (مورد نیاز لاراول) --}}
        <input type="hidden" name="token" value="{{ $token }}">

        {{-- هدر فرم با آیکون --}}
        <div class="flex flex-col items-center mb-6 text-center">
            <div class="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center mb-4 text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">تغییر رمز عبور</h1>
            <p class="text-sm text-gray-500 mt-1">رمز جدید خود را وارد کنید</p>
        </div>

        {{-- فیلد ایمیل (غیرقابل ویرایش) --}}
        <div class="relative mb-4">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <input type="email" name="email" value="{{ $email ?? old('email') }}" readonly
                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-gray-600 cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-gray-600 transition placeholder-gray-400">
        </div>

        {{-- فیلد رمز جدید --}}
        <div class="relative mb-3">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <input type="password" name="password" placeholder="رمز جدید خود را وارد کنید" required
                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-gray-600 focus:bg-white transition placeholder-gray-400">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- فیلد تکرار رمز --}}
        <div class="relative mb-4">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <input type="password" name="password_confirmation" placeholder="تکرار رمز جدید" required
                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-gray-600 focus:bg-white transition placeholder-gray-400">
        </div>

        {{-- دکمه تغییر رمز --}}
        <button type="submit"
            class="w-full bg-slate-700 hover:bg-slate-800 text-white font-medium py-3 rounded-lg transition duration-200 shadow-sm hover:shadow-md flex items-center justify-center gap-2 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
            تغییر رمز عبور
        </button>

        {{-- لینک بازگشت به صفحه ورود --}}
        <div class="mt-6 text-center text-sm text-gray-500">
            <a href="{{ route('show-login') }}" class="text-blue-600 hover:underline transition">
                بازگشت به صفحه ورود
            </a>
        </div>

    </form>

</main>

@include('layout.footer')
