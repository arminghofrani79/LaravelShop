@include('layout.header')

<main class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4">
    
    <form action="{{ route('password.email') }}" method="POST"
        class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 border border-gray-100 relative">

        @csrf

        <div class="flex flex-col items-center mb-6 text-center">
            <div class="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center mb-4 text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">فراموشی رمز عبور</h1>
            <p class="text-sm text-gray-500 mt-1">ایمیلی که با آن ثبت‌نام کرده‌اید را وارد کنید.</p>
        </div>

        <div class="relative mb-4">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <input type="email" name="email" value="{{ old('email') }}" required
                placeholder="example@email.com"
                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-gray-600 focus:bg-white transition placeholder-gray-400">
        </div>

        @error('email')
            <div class="flex items-center gap-2 bg-red-50 text-red-600 text-sm rounded-lg px-3 py-2 mb-3 border border-red-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                <span>{{ $message }}</span>
            </div>
        @enderror

        @if (session('success'))
            <div class="flex items-center gap-2 bg-green-50 text-green-600 text-sm rounded-lg px-3 py-2 mb-3 border border-green-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <button type="submit"
            class="w-full bg-slate-700 hover:bg-slate-800 text-white font-medium py-3 rounded-lg transition duration-200 shadow-sm hover:shadow-md flex items-center justify-center gap-2 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            ارسال لینک بازیابی
        </button>

        <div class="mt-6 text-center text-sm text-gray-500">
            <a href="{{ route('show-login') }}" class="text-blue-600 hover:underline transition">
                بازگشت به صفحه ورود
            </a>
        </div>

    </form>

</main>

@include('layout.footer')