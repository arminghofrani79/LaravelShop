@section('title', 'آدرس‌های من | LaravelShop')
@include('user.layout.side')

{{-- left col --}}
<div class="flex flex-col gap-6 lg:col-span-4">

    <div class="flex justify-start">
        <a href="{{ route('user-address-create') }}"
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
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $totalAddresses }}</span>
            </div>
            <div class="w-10 h-10 bg-gray-100 text-gray-600 rounded-full flex items-center justify-center">
                <img class="w-4 h-4" src="{{ asset('images/icons/address.webp') }}" alt="">
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs text-gray-500">تعداد آدرس‌های پیش‌فرض</span>
                <span class="text-lg font-bold text-gray-800 mt-1">{{ $defaultAddresses }}</span>
            </div>
            <div class="w-10 h-10 bg-gray-50 text-gray-500 rounded-full flex items-center justify-center">
                <img class="w-4 h-4" src="{{ asset('images/icons/location.webp') }}" alt="">
            </div>
        </div>
    </div>

    <!-- address card -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        @foreach ($addresses as $address)
            <div class="bg-white rounded-xl shadow-sm p-5 flex flex-col gap-3">
                <div class="relative flex justify-between items-start">
                    <h4 class="font-bold text-gray-800 text-sm flex items-center gap-2">
                        <img class="w-4 h-4" src="{{ asset('images/icons/address.webp') }}" alt="">
                        {{ $address->title }}
                    </h4>
                    <span
                        @if ($address->is_default) <span class="absolute top-3 left-3 bg-green-100 text-green-700 px-2 py-0.5 rounded-md text-[10px] font-medium">
                           پیش‌فرض
                        </span> @endif
                        </span>

                </div>

                <div class="space-y-2 text-sm">
                    <div class="flex items-center gap-2 text-gray-600 text-xs">
                        <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                        <span> {{ $address->full_name }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600 text-xs">
                        <img class="w-4 h-4" src="{{ asset('images/icons/phone.webp') }}" alt="">
                        <span> {{ $address->phone }}</span>
                    </div>
                    <div class="text-xs text-gray-600 leading-relaxed pt-1">
                        {{ $address->address }}
                    </div>
                    <div class="flex items-center gap-2 text-gray-500 text-xs pt-1">
                        <img class="w-4 h-4" src="{{ asset('images/icons/order.webp') }}" alt="">
                        <span>کد پستی: {{ $address->postal_code }}</span>
                    </div>
                </div>

                <div class="flex gap-3 mt-2 pt-3 border-t border-gray-100">
                    <a href="{{ route('user-address-edit', ['address' => $address->id]) }}"
                        class="flex-1 flex items-center justify-center gap-1 border border-gray-300 hover:bg-gray-50 text-gray-700 py-2 rounded-lg text-xs transition">
                        <img class="w-4 h-4" src="{{ asset('images/icons/edit.webp') }}" alt="">
                        ویرایش
                    </a>
                    <form action="{{ route('user-address-destroy', ['address' => $address->id]) }}" method="POST"
                        class="flex-1 flex items-center justify-center gap-1 border border-gray-200 hover:bg-gray-50 text-gray-500 py-2 rounded-lg text-xs transition">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="delete-btn" data-title="{{ $address->title }}">
                            <img class="w-4 h-4" src="{{ asset('images/icons/delete.webp') }}" alt="">
                            <p class="text-gray-500"> حذف</p>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach


    </div>

</div>


</main>


@include('layout.footer')
