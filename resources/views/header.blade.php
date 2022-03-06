<header class="block md:flex border-b pb-1 md:pb-3 border-blue-400">
    <div class="h-8 mt-2 mb-2 ml-1 w-full flex items-end">
        <img src="/logo.png" alt="Collintra" class="h-6 inline" title="{{ config('app.definition') }}" />
        <div class="text-gray-600 italic text-sm w-min inline-flex flex-col justify-end ml-1 mr-1 translate-y-3" title="{{ "Published on the " . config('app.version_date') . "." }}">{{ config('app.version') }}</div>
    </div>
    <div class="m-2 rounded-full border border-blue-400 h-14 w-14 text-center" hidden></div>
    <div class="flex-1 md:justify-end md:flex items-center">
        @livewire("search")
        <div class="flex space-x-3">
            <div class="md:hidden rounded-md px-2 menubtn " :class="{'bg-blue-200': menuOpen}" @click="menuOpen = !menuOpen"><strong>Articles</strong></div>
            <x-menu.button route="/">Home</x-menu.button>
            <x-menu.button route="/learn">Learn</x-menu.button>
            <x-menu.button route="/about">About</x-menu.button>
        </div>
    </div>
</header>
