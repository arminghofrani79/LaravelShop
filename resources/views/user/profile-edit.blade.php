@include('profile.layout.side')

<div class="lg:col-span-3 flex flex-col gap-6">

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">

        {{-- header --}}
        <div class="flex items-center gap-2 pb-4 border-b border-gray-100">
            <img class="h-4 w-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
            <h2 class="text-lg font-bold text-gray-800">ویرایش اطلاعات حساب</h2>
        </div>

        {{-- name --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-1.5">
                <label class="text-sm text-gray-500 font-medium text-right">نام</label>
                <input type="text" value="محمد" readonly
                    class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
            </div>

            <div class="flex flex-col gap-1.5">
                <label class="text-sm text-gray-500 font-medium text-right">نام خانوادگی</label>
                <input type="text" value="محمدی" readonly
                    class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
            </div>
        </div>

        {{-- phone&email --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-1.5">
                <label class="text-sm text-gray-500 font-medium text-right">موبایل</label>
                <input type="text" value="09146911909" readonly
                    class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
            </div>

            <div class="flex flex-col gap-1.5">
                <label class="text-sm text-gray-500 font-medium text-right">ایمیل</label>
                <input type="email" value="m0hamadi@ifo.com" readonly
                    class="w-full px-4 py-2.5 bg-gray-50 border-0 rounded-lg text-sm text-gray-700 text-right focus:ring-0 read-only:bg-gray-50 read-only:text-gray-700 cursor-default">
            </div>
        </div>

        {{-- edit button --}}
        <div class="flex justify-start mt-2 pt-4 border-t border-gray-100">
            <button type="button"
                class="bg-gray-700 hover:bg-slate-800 text-white px-6 py-2.5 rounded-lg text-sm flex items-center gap-2 transition shadow-sm">
                ویرایش اطلاعات
            </button>
        </div>

    </div>
</div>

</main>
@include('layout.footer')
