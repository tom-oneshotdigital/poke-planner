<div class="rounded-r-xl rounded-l-md shadow-2xl bg-gray-400 flex items-stretch">
    <span class="block w-3 border-r-gray-800 border-r bg-linear-to-r from-gray-500 to-gray-400 rounded-l-md"></span>
    <div class="p-6 flex flex-col gap-4">
        <div>
            <h3 class="text-xl text-gray-700 mb-1">{{ $collection->name }}</h3>
            <p class="text-xs">{{ $collection->collectionType->name }}</p>
        </div>
        <p>{{ $collection->description }}</p>
    </div>
</div>
