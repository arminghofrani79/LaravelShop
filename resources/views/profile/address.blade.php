@include('profile.layout.side')

{{-- left col --}}
<div class="lg:col-span-3 flex flex-col gap-6">

    <div class="flex justify-start">
        <a href="{{ route('user-create-address') }}"
            class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-2.5 rounded-lg text-sm flex items-center gap-2 transition shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            افزودن آدرس جدید
        </a>
    </div>

    <!-- cards -->
    <div class="grid grid-cols-2 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">تعداد آدرس‌های من</span>
                <span class="text-lg font-bold text-gray-800 mt-1">۳</span>
            </div>
            <div class="w-10 h-10 bg-gray-100 text-gray-600 rounded-full flex items-center justify-center">
                <img class="w-4 h-4" src="{{ asset('images/icons/address.png') }}" alt="">
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">تعداد آدرس‌های پیش‌فرض</span>
                <span class="text-lg font-bold text-gray-800 mt-1">۱</span>
            </div>
            <div class="w-10 h-10 bg-gray-50 text-gray-500 rounded-full flex items-center justify-center">
                <img class="w-4 h-4" src="{{ asset('images/icons/location.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- address card -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

        <!-- address1 -->
        <div class="bg-white rounded-xl shadow-sm p-5 flex flex-col gap-3">
            <div class="relative flex justify-between items-start">
                <h4 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                    <img class="w-4 h-4" src="{{ asset('images/icons/address.png') }}" alt="">
                    آدرس محل کار
                </h4>
                <span
                    class="absolute top-3 left-3 bg-green-100 text-green-700 px-2 py-0.5 rounded-md text-[10px] font-medium">پیش‌فرض</span>

            </div>

            <div class="space-y-2 text-sm">
                <div class="flex items-center gap-2 text-gray-600 text-xs">
                    <img class="w-4 h-4" src="{{ asset('images/icons/profile2.png') }}" alt="">
                    <span>علی محمدی</span>
                </div>
                <div class="flex items-center gap-2 text-gray-600 text-xs">
                    <img class="w-4 h-4" src="{{ asset('images/icons/phone.png') }}" alt="">
                    <span>0912 123 4567</span>
                </div>
                <div class="text-xs text-gray-600 leading-relaxed pt-1">
                    تهران، خیابان ولیعصر، پایین‌تر از میدان ونک، خیابان شهید برادران مظفر، پلاک ۲۱۰، طبقه ۳،
                    واحد ۱۲
                </div>
                <div class="flex items-center gap-2 text-gray-500 text-xs pt-1">
                    <img class="w-4 h-4" src="{{ asset('images/icons/order.png') }}" alt="">
                    <span>کد پستی: ۱۵۸۹۶۵۷۴۱۱</span>
                </div>
            </div>

            <div class="flex gap-3 mt-2 pt-3 border-t border-gray-100">
                <a href="{{ route('user-edit-address') }}"
                    class="flex-1 flex items-center justify-center gap-1 border border-gray-300 hover:bg-gray-50 text-gray-700 py-2 rounded-lg text-xs transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/edit.png') }}" alt="">
                    ویرایش
                </a>
                <button
                    class="flex-1 flex items-center justify-center gap-1 border border-gray-200 hover:bg-gray-50 text-gray-500 py-2 rounded-lg text-xs transition">
                    <img class="w-4 h-4" src="{{ asset('images/icons/delete.png') }}" alt="">
                    حذف
                </button>
            </div>
        </div>

    </div>

</div>


</main>


@include('layout.footer')
