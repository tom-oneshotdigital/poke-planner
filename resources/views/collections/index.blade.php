<x-layouts.app :title="__('Dashboard')">
    <div class="w-full flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold">My collections</h1>
            <p>Here you can see all your collections</p>
        </div>
        <div>
            <a href="#"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            >
                Create collection
            </a>
        </div>
    </div>
    <div class="grid grid-cols-3 w-full gap-8 rounded-xl">
        @foreach($collections as $collection)
            <x-collection-card :collection="$collection"></x-collection-card>
        @endforeach
    </div>
</x-layouts.app>
