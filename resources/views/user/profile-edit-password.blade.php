@section('title', 'تغییر رمز عبور | LaravelShop')
@include('user.layout.side')
<div class="lg:col-span-3 flex flex-col gap-6">
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">
        <form action="{{ route('user-profile-password-update') }}" method="POST">
            @csrf
            @method('PUT')
            {{-- header --}}
            <div class="flex items-center gap-2 pb-4 border-b border-gray-100">
                <img class="h-4 w-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                <h2 class="text-lg font-bold text-gray-800">ویرایش اطلاعات حساب</h2>
            </div>

            {{-- pass --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-500 font-medium text-right">رمز عبور فعلی</label>
                    <input name="current_password" type="password" placeholder="****"
                        class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
                    @error('current_password')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-500 font-medium text-right">رمز عبور</label>
                    <input name="password" type="password" placeholder="****"
                        class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
                    @error('password')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-500 font-medium text-right">تکرار رمز عبور</label>
                    <input name="password_confirmation" type="password" placeholder="****"
                        class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
                    @error('password_confirmation')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>








            {{-- edit button --}}
            <div class="flex justify-start mt-2 pt-4 border-t border-gray-100">
                <button type="submit"
                    class="bg-gray-700 hover:bg-slate-800 text-white px-6 py-2.5 rounded-lg text-sm flex items-center gap-2 transition shadow-sm">
                    ویرایش رمز عبور
                </button>
            </div>

        </form>
    </div>
</div>

</main>
@include('layout.footer')
