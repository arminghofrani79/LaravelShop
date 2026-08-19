@section('title', 'داشبورد مدیریت | LaravelShop')
@include('admin.layout.side')

<!-- left col -->
<div class="lg:col-span-3 flex flex-col gap-6">

    {{-- products --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- last orders -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-5">
            <div class="flex justify-between items-center border-b border-gray-100 pb-4 mb-4">
                <h3 class="font-bold text-gray-800 text-sm">سفارش‌های اخیر</h3>
                <a href="{{ route('adminorders') }}"
                    class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                    <span>مشاهده همه</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-gray-500 border-b border-gray-100">
                            <th class="text-center pb-3 font-medium">شماره سفارش</th>
                            <th class="text-center pb-3 font-medium">مشتری</th>
                            <th class="text-center pb-3 font-medium">وضعیت</th>
                            <th class="text-center pb-3 font-medium">مبلغ</th>
                            <th class="text-center pb-3 font-medium">تاریخ</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse ($orders as $order)
                            <tr class="border-b border-gray-50">
                                <td class="py-3 text-center font-medium">{{ $order->order_number }}</td>
                                <td class="py-3 text-center"> {{ $order->user->name }}</td>
                                <td class="py-3 text-center"><span
                                        class="bg-green-100 text-green-700 px-2 py-1 rounded text-[10px]">
                                        {{ $order->status }}
                                    </span></td>
                                <td class="py-3 text-center">{{ $order->total_price }} تومان</td>
                                <td class="py-3 text-center">
                                    <div class="flex flex-col items-center text-xs">
                                        <span>{{ \Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('Y/m/d') }}</span>
                                        <span
                                            class="text-gray-400">{{ \Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('H:i') }}</span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

        <!-- product less -->
        <div class="bg-white rounded-xl shadow-sm p-5">
            <h3 class="font-bold text-gray-800 text-sm mb-4 border-b border-gray-100 pb-4">
                محصولات کم‌موجودی
            </h3>

            <div class="flex flex-col gap-4">
                @foreach ($lessProducts as $product)
                    <div class="flex items-center justify-between border-b border-gray-50 pb-3">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm text-gray-800">{{ $product->name }}</span>
                            <span class="text-xs text-gray-400">موجودی: <span class="text-gray-700">
                                    {{ $product->stock }}</span>
                                عدد</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="bg-red-100 text-red-600 px-2 py-0.5 rounded text-[10px]">کم‌موجودی</span>
                            <img src="{{ asset('/storage/images/products/' . $product->image) }}" alt="product"
                                class="w-10 h-10 object-contain rounded-lg bg-gray-50">
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </div>

    <!-- articles -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- last articles -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-5">
            <div class="flex justify-between items-center border-b border-gray-100 pb-4 mb-4">
                <h3 class="font-bold text-gray-800 text-sm">مقالات اخیر</h3>
                <a href="{{ route('adminarticles') }}"
                    class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                    <span>مشاهده همه</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-3 gap-4">
                @foreach ($articles as $article)
                    <div class="flex flex-col gap-2">
                        <img src="{{ asset('/storage/images/articles/' . $article->image) }}" alt="article"
                            class="w-full h-20 rounded-lg object-cover">
                        <div>
                            <span
                                class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-[10px] inline-block mb-1">مقاله</span>
                            <h4 class="text-xs font-bold text-gray-800 line-clamp-2">
                                {{ $article->title }}
                            </h4>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>


    </div>
</div>


</div>

</main>

@include('layout.footer')
