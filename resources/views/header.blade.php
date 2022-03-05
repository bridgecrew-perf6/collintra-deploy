<header class="flex border-b mb-3 border-blue-400">
    <div class="h-8 mt-2 mb-4 ml-1 w-full flex items-end">
        <img src="/logo.png" alt="Collintra" class="h-6 inline" title="{{ config('app.definition') }}" />
        <div class="text-gray-600 italic text-sm w-min inline-flex flex-col justify-end ml-1 mr-1 translate-y-3" title="{{ "Published on the " . config('app.version_date') . "." }}">{{ config('app.version') }}</div>
    </div>
    <div class="m-2 rounded-full border border-blue-400 h-14 w-14 text-center" hidden></div>
    <div class="flex-1 justify-end mr-5 flex items-center space-x-3">
        @livewire("search")
        <x-menu.button route="/">Home</x-menu.button>
        <x-menu.button route="/learn">Learn</x-menu.button>
        <x-menu.button route="/about">About</x-menu.button>
    </div>
</header>
