<div class=" w-full">
    @foreach($articles as $article)
    @if($article->article_id == null)
    <div class="font-semibold text-lg h-6 overflow-hidden text-ellipsis whitespace-nowrap {{ $article->is($currentArticle) ? 'selected' : ''}}"><a class=" max-h-64 max-w-[15rem] block overflow-hidden text-ellipsis" href="{{ $article->path() }}">{{ $article->title }}</a></div>
    <div class="ml-5 text-sm">
        @foreach ($article->articles as $subarticle)
        <a class="no-underline " href="{{ $subarticle->path() }}">
            <div class="h-6 overflow-hidden text-ellipsis whitespace-nowrap flex-wrap max-w-[15rem] hover:bg-blue-200 rounded-sm px-1 max-h-64 {{ $subarticle->is($currentArticle)  ? 'text-black bg-blue-200' : 'hover:text-black text-gray-700 '}}">
                {{ $subarticle->title }}
            </div>
        </a>
        @endforeach
    </div>
    @endif
    @endforeach
</div>
