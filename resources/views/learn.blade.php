@php
use Carbon\Carbon;
@endphp
<x-layout>
    <div class="md:flex relative">
        <div class="md:border-r border md:border-0 rounded-md md:rounded-none w-full md:w-[250px] border-blue-800 pr-3 p-1 md:relative absolute z-40 top-0 bg-bluebg max-h-screen overflow-y-scroll overflow-x-hidden shadow-xl md:shadow-none" @click.away="window.innerWidth <= 768 ? menuOpen = false : null" x-show="window.innerWidth > 768 || menuOpen" x-collapse x-cloak="mobile" @resize.window="window.innerWidth <= 768 ? menuOpen = false : null">
            @include('articles-menu', ['articles' => $articles])
        </div>

        <div class="max-w-full flex-1 mt-3 md:mt-5">

            @include('article-window', ['currentArticle' => $currentArticle])
        </div>
    </div>
    <script>

    </script>
</x-layout>
