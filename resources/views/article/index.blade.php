@include('layout.header')

{{-- header --}}
<header class="bg-cover bg-center bg-no-repeat w-full h-30 flex items-center px-4 md:px-8"
    style="background-image: url('{{ asset('images/banners/backgroundarticle.png') }}');">
    <h1 class="font-bold text-2xl text-gray-600 px-4 py-2 rounded-lg">مقالات</h1>
</header>
{{-- articles --}}
<article>
    {{-- single article in header --}}
    <header
        class="flex flex-col md:flex-row gap-6 mx-4 md:mx-10 p-5 md:p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-gray-200 cursor-pointer">
        <div class="flex flex-col gap-4 w-full md:w-1/2 justify-between">
            <h1 class="font-bold text-xl md:text-2xl text-gray-800">{{ $article->title }}</h1>
            <p class="text-gray-500 text-sm leading-relaxed">
                {{ $article->content }}
            </p>
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-2">
                <span class="text-gray-400 text-xs">{{ $article->published_at }}</span>
                <div
                    class="h-10 bg-gray-800 hover:bg-gray-900 rounded-lg flex items-center justify-center transition-colors px-6">
                    <a href="{{ route('article-show', ['article' => $article->id]) }}"
                        class="text-white text-sm font-medium w-full h-full flex items-center justify-center">
                        مطالعه مقاله
                    </a>
                </div>
            </div>
        </div>

        <!-- ستون تصویر (سمت چپ در حالت RTL) -->
        <div class="w-full md:w-1/2 flex items-center justify-center md:justify-end">
            <img src="{{ asset('/storage/images/articles/' . $article->image) }}"
                class="w-full h-48 md:h-auto object-cover rounded-xl" alt="تصویر مقاله ساعت">
        </div>

    </header>


    {{-- paginate 3 articles --}}
    <div class="flex justify-center items-center text-center flex-col">
        <main class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full px-4 py-8 gap-2">
            @foreach ($articles as $articl)
                {{-- article card --}}
                <div
                    class="flex flex-col h-full bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-gray-200 cursor-pointer overflow-hidden">
                    <img class="w-full h-40 object-cover"
                        src="{{ asset('/storage/images/articles/' . $articl->image) }}" alt="a">
                    <div class="flex flex-col justify-between flex-grow p-5 gap-3">
                        <div class="bg-gray-100 text-gray-600 rounded-full px-3 py-1 w-fit text-lg font-medium mb-2">
                            {{ $articl->title }}
                        </div>
                        <h1 class="font-bold text-l md:text-2xl text-gray-800"></h1>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            {{ $articl->describe }}
                        </p>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 mt-2">

                            <div
                                class="h-10 hover:text-gray-900 rounded-lg flex items-center justify-center transition-colors px-6">
                                <a href="{{ route('article-show', ['article' => $articl->id]) }}"
                                    class="text-black text-sm font-medium w-full h-full flex items-center justify-center">
                                    مطالعه مقاله
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- pagination --}}

        </main>
        <div class="mt-2 ">
            {{ $articles->links() }}
        </div>
    </div>

</article>

@include('layout.footer')
