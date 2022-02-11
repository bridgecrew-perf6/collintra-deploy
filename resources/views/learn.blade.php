<x-layout>
    <div class="flex w-full space-x-5">
        <div class="border-r border-blue-400 pr-3 p-1" style="min-width: 200px">
            <div>
                @foreach($articles as $article)
                @if($article->article_id == null)
                <div class="font-semibold text-xl {{ $article->is($currentArticle) ? 'selected' : ''}}"><a href="{{ $article->path() }}">{{ $article->title }}</a></div>
                <div class="ml-5">
                    @foreach ($article->articles as $subarticle)
                    <a href="{{ $subarticle->path() }}">
                        <div class="hover:bg-blue-300 rounded-sm px-1 hover:text-white">{{ $subarticle->title }}</div>
                    </a>
                    @endforeach
                </div>
                @endif
                @endforeach
            </div>

        </div>

        <div class="prose prose-slate">
            <h1>{{ $currentArticle->title }}</h1>
            {!! $currentArticle->body !!}
        </div>
    </div>
</x-layout>
