@php
use Carbon\Carbon;
@endphp
<x-layout>
    <div class="md:flex relative">
        <div class="md:border-r border md:border-0 rounded-md md:rounded-none w-full md:w-[250px] border-blue-800 pr-3 p-1 md:relative absolute z-40 top-0 bg-bluebg max-h-screen overflow-y-scroll overflow-x-hidden shadow-xl md:shadow-none" @click.away="window.innerWidth <= 768 ? menuOpen = false : null" x-show="window.innerWidth > 768 || menuOpen" x-collapse x-cloak="mobile" @resize.window="window.innerWidth <= 768 ? menuOpen = false : null">
            <div class="max-h-64 w-full">
                @foreach($articles as $article)
                @if($article->article_id == null)
                <div class="font-semibold text-lg h-6 overflow-hidden text-ellipsis whitespace-nowrap {{ $article->is($currentArticle) ? 'selected' : ''}}"><a href="{{ $article->path() }}">{{ $article->title }}</a></div>
                <div class="ml-5 text-sm">
                    @foreach ($article->articles as $subarticle)
                    <a class="no-underline " href="{{ $subarticle->path() }}">
                        <div class="h-6 overflow-hidden text-ellipsis whitespace-nowrap flex-wrap max-w-sm hover:bg-blue-200 rounded-sm px-1 {{ $subarticle->is($currentArticle)  ? 'text-black bg-blue-200' : 'hover:text-black text-gray-700 '}}">
                            {{ $subarticle->title }}
                        </div>
                    </a>
                    @endforeach
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="max-w-full flex-1 mt-3 md:mt-5">
            <div class="prose prose-slate px-0 md:px-10 lg:px-24 max-w-full overflow-hidden">
                <div class="flex flex-wrap items-center mb-3 w-full md:mb-5">

                    <h1 class="not-prose flex-1 min-w-max !my-0 mr-2">{{ $currentArticle->title }}</h1>

                    <div class="not-prose text-gray-500 text-sm italic">
                        <span>Last update: </span>
                        <span title="{{ $currentArticle->updated_at->format("d.m.Y H:i:s") }}">
                            {{ $currentArticle->updated_at->format("d.m.Y") }}
                        </span>
                        <span>|</span>
                        <span>Revisions: </span>
                        <span>8 </span>
                    </div>
                </div>

                <div class="">{!! $currentArticle->body !!}</div>
            </div>
        </div>
    </div>
    <script>

    </script>
</x-layout>
