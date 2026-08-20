@section('title', $article->title . ' | LaravelShop')
@include('layout.header')

{{-- header --}}
<header
    class="relative flex min-h-[140px] w-full items-center overflow-hidden bg-cover bg-left bg-no-repeat px-4 sm:min-h-[150px] md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundarticle.webp') }}');">
    <div class="absolute inset-0 bg-gradient-to-l from-[#F5F6F7] via-[#F5F6F8] to-transparent"></div>
    <div class="relative z-10 mx-auto m-5 flex w-full max-w-7xl items-center justify-start rounded-2xl border-2 border-white p-5">
        <div class="max-w-xl text-right">
            <div class="mb-2 flex items-center gap-2">
                <span class="h-2 w-2 rounded-full bg-[#00ADB5]"></span>
                <span class="text-xs font-medium text-[#00ADB5] sm:text-sm">فروشگاه LaravelShop</span>
            </div>
            <h1 class="text-2xl font-bold text-[#222831] sm:text-3xl">مقاله</h1>
            <div class="mt-2 ml-auto mr-0 h-[2px] w-16 rounded-full bg-[#00ADB5]"></div>
            <p class="mt-3 hidden max-w-md text-xs leading-7 text-[#393E46] sm:block md:text-base">
                با مطالعه مقالات ما، انتخابی آگاهانه‌تر برای خرید ساعت داشته باشید.
            </p>
        </div>
    </div>
</header>
{{-- article --}}
<main class="mx-auto max-w-4xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">
    <article class="overflow-hidden rounded-2xl border border-[#393E46]/10 bg-white shadow-sm">
        <figure class="relative aspect-[16/9] w-full overflow-hidden bg-[#F5F6F7] sm:aspect-[2/1]">
            <img src="{{ asset('storage/images/articles/' . $article->image) }}" alt="{{ $article->title }}"
                class="h-full w-full object-cover">
        </figure>

        <div class="p-5 sm:p-8 lg:p-10">
            <header class="border-b border-[#393E46]/10 pb-6 sm:pb-8">
                <span class="inline-flex rounded-full bg-[#00ADB5]/10 px-3 py-1 text-xs font-semibold text-[#00ADB5]">
                    مقاله آموزشی
                </span>
                <h1 class="mt-4 text-2xl font-bold leading-9 text-[#222831] sm:text-3xl sm:leading-[1.8] lg:text-4xl">
                    {{ $article->title }}
                </h1>

                <div class="mt-5 flex flex-wrap items-center gap-x-6 gap-y-3 text-xs text-[#393E46]/65 sm:text-sm">
                    <div class="flex items-center gap-2">
                        <img class="h-5 w-5 object-contain" src="{{ asset('images/icons/profile2.webp') }}" alt="">
                        <span>نویسنده: آرمین غفرانی</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img class="h-5 w-5 object-contain" src="{{ asset('images/icons/calendar.webp') }}" alt="">
                        <span>{{ $article->created_at }}</span>
                    </div>
                </div>
            </header>

            <div class="mt-7 text-justify text-base leading-8 text-[#393E46] sm:mt-8 sm:text-lg sm:leading-9">
                <p>{{ $article->content }}</p>
            </div>

            <footer class="mt-8 border-t border-[#393E46]/10 pt-6">
                <a href="{{ route('articles') }}"
                    class="inline-flex items-center gap-2 rounded-lg bg-[#00ADB5]/10 px-4 py-2.5 text-sm font-bold text-[#00ADB5] transition hover:bg-[#00ADB5] hover:text-white">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    بازگشت به لیست مقالات
                </a>
            </footer>
        </div>
    </article>
</main>


@include('layout.footer')
