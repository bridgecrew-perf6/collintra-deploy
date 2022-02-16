@php
use Carbon\Carbon;
@endphp
<x-layout>
    <div class="flex w-full space-x-5">
        <div class="border-r border-blue-400 pr-3 p-1" style="width: 250px;">
            <div>
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

        <div class="">
            <div class="prose prose-slate">
                <div class="flex items-center">

                    <h1 class="not-prose flex-1 !my-0">{{ $currentArticle->title }}</h1>

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

                <div>{!! $currentArticle->body !!}</div>
            </div>
        </div>
    </div>
</x-layout>
