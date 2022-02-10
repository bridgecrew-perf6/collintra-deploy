<header class="flex border-b border-blue-400">
    <div class="m-2 rounded-full border border-blue-400 h-20 w-20 text-center ">LOGO</div>
    <div class="flex-1 justify-end mr-5 flex items-center space-x-3">
        @livewire("search")
        <x-menu.button route="/">Home</x-menu.button>
        <x-menu.button route="/learn">Learn</x-menu.button>
        <x-menu.button route="/about">About</x-menu.button>
    </div>
</header>
