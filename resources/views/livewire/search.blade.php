<div class="relative">
    <input class="w-60" type="text" placeholder="Global instant search..." wire:model="search">

    @if(trim($search) != '22')
    <div class="absolute top-0 bg-blue-50 p-1 rounded-md border-blue-400 border mt-8 space-y-1">
        @foreach ($articles as $article)
        <div class="border-blue-700 border-y">
            <span class="leading-7 whitespace-nowrap font-bold block max-w-xs overflow-hidden text-ellipsis">{{ $article->title }}</span>
            <span class="whitespace-nowrap  leading-tight block text-slate-700 font-semi text-sm leading-1">{{ $article->pieceOf($search) }}</span>
        </div>
        @endforeach
        @if(count($articles) == 0 || $articles == null)
        <div class="text-sm italic text-slate-700">No article found with "{{ $search }}" sorry...</div>
        @endif

    </div>
    @endif
</div>
