<header class="flex border-b mb-3 border-blue-400">
    <div class="m-2 rounded-full border border-blue-400 h-14 w-14 text-center">LOGO</div>
    <div class="flex-1 justify-end mr-5 flex items-center space-x-3">
        @livewire("search")
        <x-menu.button route="/">Home</x-menu.button>
        <x-menu.button route="learn">Learn</x-menu.button>
        <x-menu.button route="about">About</x-menu.button>
    </div>
</header>
