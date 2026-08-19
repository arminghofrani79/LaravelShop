@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundarticle.webp') }}');">
    <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">مقاله</h1>
</header>
{{-- article --}}
<article class="container mx-auto max-w-4xl px-4 py-8 md:py-12">

    <!-- article image -->
    <div class="w-full mb-6">
        <img src="{{ asset('storage/images/articles/' . $article->image) }}" alt="تصویر مقاله"
            class="w-full h-64 md:h-96 object-cover rounded-xl shadow-sm">
    </div>

    <!-- category & title -->
    <div class="flex flex-col gap-3 mb-8">
        <h1 class="text-2xl md:text-4xl font-bold text-gray-800">
            {{ $article->title }}
        </h1>
    </div>

    <!-- metadata -->
    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 border-b border-gray-200 pb-6 mb-6">
        <div class="flex items-center gap-2">
            <img class="w-4 h-4" src="{{ asset('images/icons/profile2.webp') }}" alt="">
            <span>نویسنده: آرمین غفرانی</span>
        </div>
        <div class="flex items-center gap-2">
            <img class="w-4 h-4" src="{{ asset('images/icons/calendar.webp') }}" alt="">
            <span>{{ $article->created_at }}</span>
        </div>
    </div>

    <!-- article paragraph -->
    <div class="text-gray-700 text-justify leading-relaxed text-base md:text-lg space-y-6 mb-10">
        <p>
            {{ $article->content }}
        </p>
    </div>

    <!-- redirect to articles page -->
    <div class="flex justify-center md:justify-start pt-6 border-t border-gray-100">
        <a href="{{ route('articles') }}"
            class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست مقالات
        </a>
    </div>

</article>


@include('layout.footer')
