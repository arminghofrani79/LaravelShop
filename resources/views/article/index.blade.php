@section('title', 'مقالات | LaravelShop')
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
            <h1 class="text-2xl font-bold text-[#222831] sm:text-3xl">مقالات</h1>
            <div class="mt-2 ml-auto mr-0 h-[2px] w-16 rounded-full bg-[#00ADB5]"></div>
            <p class="mt-3 hidden max-w-md text-xs leading-7 text-[#393E46] sm:block md:text-base">
                برای انتخاب ساعت مناسب، مقالات مفیدی برایتان آماده کرده‌ایم.
            </p>
        </div>
    </div>
</header>
{{-- articles --}}
<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">
    {{-- featured article --}}
    <section class="mb-10" aria-labelledby="featured-article-title">
        <div class="mb-5 flex items-center justify-between gap-4">
            <h2 class="text-xl font-bold text-[#222831] sm:text-2xl">مقاله منتخب</h2>
            <span class="h-px flex-1 bg-[#00ADB5]/20"></span>
        </div>

        <article class="group overflow-hidden rounded-2xl border border-[#393E46]/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
            <div class="grid items-stretch md:grid-cols-2">
                <div class="relative min-h-56 overflow-hidden sm:min-h-72 md:order-2 md:min-h-[340px]">
                    <img src="{{ asset('/storage/images/articles/' . $article->image) }}"
                        class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        alt="{{ $article->title }}">
                </div>
                <div class="flex flex-col justify-center p-5 text-right sm:p-8 md:order-1 lg:p-10">
                    <span class="mb-4 w-fit rounded-full bg-[#00ADB5]/10 px-3 py-1 text-xs font-semibold text-[#00ADB5]">
                        پیشنهاد مطالعه
                    </span>
                    <h2 id="featured-article-title" class="text-xl font-bold leading-9 text-[#222831] sm:text-2xl lg:text-3xl">
                        {{ $article->title }}
                    </h2>
                    <p class="mt-4 line-clamp-3 text-sm leading-7 text-[#393E46]/75 sm:text-base">
                        {{ $article->content }}
                    </p>
                    <div class="mt-6 flex flex-wrap items-center justify-between gap-4">
                        <span class="text-xs text-[#393E46]/55">{{ $article->published_at }}</span>
                        <a href="{{ route('article-show', ['article' => $article->id]) }}"
                            class="inline-flex items-center justify-center rounded-lg bg-[#00ADB5] px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#008f96]">
                            مطالعه مقاله
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </section>

    {{-- article cards --}}
    <section aria-labelledby="all-articles-title">
        <div class="mb-5 flex items-center justify-between gap-4">
            <h2 id="all-articles-title" class="text-xl font-bold text-[#222831] sm:text-2xl">آخرین مقالات</h2>
            <span class="h-px flex-1 bg-[#00ADB5]/20"></span>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($articles as $articl)
                <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-[#393E46]/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative aspect-[16/10] overflow-hidden bg-[#F5F6F7]">
                        <img class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            src="{{ asset('/storage/images/articles/' . $articl->image) }}" alt="{{ $articl->title }}">
                    </div>
                    <div class="flex flex-1 flex-col p-5 text-right">
                        <h3 class="line-clamp-2 min-h-14 text-lg font-bold leading-7 text-[#222831]">
                            {{ $articl->title }}
                        </h3>
                        <p class="mt-3 line-clamp-3 text-sm leading-7 text-[#393E46]/70">
                            {{ $articl->describe }}
                        </p>
                        <div class="mt-auto pt-5">
                            <a href="{{ route('article-show', ['article' => $articl->id]) }}"
                                class="inline-flex items-center gap-2 text-sm font-bold text-[#00ADB5] transition hover:text-[#008f96]">
                                مطالعه مقاله
                                <span aria-hidden="true">←</span>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $articles->links() }}
        </div>
    </section>
</main>

@include('layout.footer')
