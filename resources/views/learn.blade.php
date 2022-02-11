<x-layout>
    <div class="flex w-full space-x-5">
        <div class="border-r border-blue-400 pr-3 p-1" style="min-width: 200px">
            <div>
                @foreach($articles as $article)
                @if($article->article_id == null)
                <div class="font-semibold text-xl">{{ $article->title }}</div>
                <div class="ml-5">
                    @foreach ($article->articles as $subarticle)
                    <div>{{ $subarticle->title }}</div>
                    @endforeach
                </div>
                @endif
                @endforeach
            </div>

        </div>

        <div>
            <h1>{{ $articles->first()->title }}</h1>
            {!! $articles->first()->body !!}
        </div>
    </div>
</x-layout>
