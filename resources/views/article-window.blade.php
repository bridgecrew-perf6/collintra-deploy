<div class="prose-sm md:prose-lg prose-slate px-0 md:px-10 lg:px-24 max-w-full overflow-hidden">
    <div class="items-center w-full md:mb-5 pt-2">

        <h1 class="not-prose flex-1 !my-0 mr-2">{{ $currentArticle->title }}</h1>

        <div class="not-prose text-gray-500 my-3 text-sm italic">
            <span>Last update: <span title="{{ $currentArticle->updated_at->format("d.m.Y H:i:s") }}">
                    {{ $currentArticle->updated_at->format("d.m.Y") }}
                </span>
            </span>

            <span>| Revisions: 8 </span>

            <span>| Contributors: 3 </span>
        </div>
    </div>

    <div class="">{!! $currentArticle->body !!}</div>
</div>
