<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            <img src="{{ $set->getImages()->getSymbol() }}">
        </div>
    </div>
</x-layouts.app>
