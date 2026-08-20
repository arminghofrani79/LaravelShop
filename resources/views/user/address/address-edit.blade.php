@section('title', 'ویرایش آدرس | LaravelShop')
@include('user.layout.side')

<div class="flex flex-col gap-6 lg:col-span-4">

    {{-- header --}}
    <div class="flex flex-col items-center w-full gap-1 mb-2">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800"> ویرایش آدرس</h1>
    </div>

    {{-- main form --}}
    <form action="{{ route('user-address-update', ['address' => $address->id]) }}" method="POST"
        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col gap-6">
        @method('PUT')
        @csrf

        {{-- part1: rec info --}}
        <div class="pb-4 border-b border-gray-100">
            <div class="flex items-center gap-2 mb-4">
                <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                <h2 class="text-base font-bold text-gray-800">اطلاعات گیرنده</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        نام و نام خانوادگی <span class="text-red-500">*</span>
                    </label>
                    <input name="full_name" type="text" value="{{ old('full_name', $address->full_name) }}"
                        placeholder="علی محمدی"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                    @error('full_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        شماره موبایل <span class="text-red-500">*</span>
                    </label>
                    <input name="phone" type="text" value="{{ $address->phone }}" placeholder="0912 123 4567"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-5 w-full md:w-1/2">
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">عنوان آدرس (اختیاری)</label>
                    <input name="title" type="text" value="{{ $address->title }}" placeholder="مثلاً خانه یا دفتر"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        {{-- part2: address info --}}
        <div class="pb-4 border-b border-gray-100">
            <div class="flex items-center gap-2 mb-4">
                <img class="w-4 h-4" src="{{ asset('images/icons/location.webp') }}" alt="">
                <h2 class="text-base font-bold text-gray-800">اطلاعات آدرس</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                {{-- province --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        استان <span class="text-red-500">*</span>
                    </label>
                    <input name="province" type="text" value="{{ $address->province }}" placeholder="تهران"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                    @error('province')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- city --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        شهر <span class="text-red-500">*</span>
                    </label>
                    <input name="city" type="text" value="{{ $address->city }}" placeholder="تهران"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                    @error('city')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>



                {{-- postal code --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm text-gray-600 text-right">
                        کد پستی <span class="text-red-500">*</span>
                    </label>
                    <input name="postal_code" type="text" value="{{ $address->postal_code }}"
                        placeholder="1589674711"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                    @error('postal_code')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Full address --}}
            <div class="mt-5 flex flex-col gap-1.5">
                <label class="text-sm text-gray-600 text-right">
                    آدرس دقیق <span class="text-red-500">*</span>
                </label>
                <input name="address" type="text" value="{{ $address->address }}"
                    placeholder="تهران، خیابان ولیعصر، پایین‌تر از میدان ونک، خیابان شهید برادران مظفر، پلاک ۲۱۰، طبقه ۳، واحد ۱۲"
                    class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-right text-gray-700">
                @error('address')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- settings --}}
        <div class="flex items-center justify-between py-2">
            <div class="flex items-center gap-2">
                <img class="w-4 h-4" src="{{ asset('images/icons/status.webp') }}" alt="">
                <span class="text-sm font-medium text-gray-700">پیش‌فرض</span>
            </div>

            <div class="flex items-center gap-3">
                <span class="text-xs text-gray-500">این آدرس به عنوان آدرس پیش‌فرض انتخاب شود</span>
                {{-- switch --}}
                <label class="relative inline-flex items-center cursor-pointer">

                    <input type="checkbox" name="is_default" value="1" class="sr-only peer"
                        {{ $address->is_default == 1 ? 'checked' : '' }}>
                    <div
                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500">
                    </div>
                </label>
            </div>
            @error('is_default')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- buttons --}}
        <div class="flex gap-3 pt-4 mt-2 border-t border-gray-100">
            <a href="{{ route('user-address') }}"
                class="flex-1 sm:flex-none bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center gap-2 cursor-pointer">
                انصراف
            </a>
            <button type="submit"
                class="flex-1 sm:flex-none bg-slate-700 hover:bg-slate-800 text-white px-6 py-2.5 rounded-lg text-sm transition flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                ذخیره آدرس
            </button>
        </div>

    </form>
</div>

</main>
@include('layout.footer')
