@php
use Carbon\Carbon;
@endphp
<x-layout>
    <div class="md:flex relative">
        <div class="h-full absolute z-40 top-0
        bg-darkbluebg max-h-screen shadow-xl
         pr-3 p-1 border border-blue-800 rounded-md
         md:border-0 md:rounded-none w-full md:w-min
         md:fixed md:left-0 md:m-3 md:top-[63px] md:shadow-none" @click.away="window.innerWidth <= 768 ? menuOpen = false : null" x-show="window.innerWidth > 768 || menuOpen" x-collapse x-cloak="mobile" @resize.window="window.innerWidth <= 768 ? menuOpen = false : null">
            @include('articles-menu', ['articles' => $articles])
        </div>

        <div class="hidden md:block w-[250px]">fake menu space</div>

        <div class="max-w-full flex-1 mt-3 sm:h-[90vh] h-[75vh] w-full overflow-auto overflow-x-hidden">
            @include('article-window', ['currentArticle' => $currentArticle])
        </div>
    </div>
    <script>

    </script>
</x-layout>
