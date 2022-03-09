<div class="prose-sm md:prose-lg prose-slate px-0 md:px-10 lg:px-24 max-w-full overflow-hidden">
    <div class="items-center w-full md:mb-5 pt-2">

        <h1 class="not-prose flex-1 !my-0 mr-2">{{ $article->title }}</h1>

        <div class="not-prose text-gray-500 my-3 text-sm italic">
            <span>Last update: <span title="{{ $article->updated_at->format("d.m.Y H:i:s") }}">
                    {{ $article->updated_at->format("d.m.Y") }}
                </span>
            </span>

            <span>| Revisions: 8 </span>

            <span>| Contributors: 3 </span>
            <span>| <button class="px-1 bg-blue-100 hover:bg-blue-100 rounded-md"><a href="/learn/{{ $article->id }}">View this article</a> </button></span>
        </div>
    </div>
    {{-- See help to integrate CKEditor in Livewire here:
    https://laracasts.com/discuss/channels/laravel/how-to-bind-ckeditor-value-to-laravel-livewire-component
    https://stackoverflow.com/questions/63543044/laravel-livewire-and-ckeditor
    --}}
    <div x-data="{mode: 'edit'}">
        <div class="border-gray-300 border rounded-sm p-1 articleLinks ">
            <div class="w-full py-1 mb-1 rounded-sm p-1">
                <button @click="mode = 'edit'" :class="{'bg-blue-300': mode== 'edit'}" class="px-1 bg-blue-300 hover:bg-blue-300 rounded-md">Edit</button>
                <button @click="mode = 'preview'" :class="{'bg-blue-300': mode== 'preview'}" class="px-1 bg-blue-100 hover:bg-blue-300 rounded-md">Preview</button>
            </div>
            <div wire:ignore x-show="mode == 'edit'">
                <textarea id="editor" wire:model.defer="article.body" class="w-full mt-10" rows="10">{!! $article->body !!}</textarea>
            </div>
            <div x-show="mode == 'preview'" x-cloak class="articleLinks p-3">
                {!! $article->body !!}
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('article.body', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });

    </script>

    {{-- <div class="">{!! $article->body !!}</div> --}}
</div>
