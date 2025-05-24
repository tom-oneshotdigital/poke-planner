<?php

namespace App\View\Components;

use App\Models\Collection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CollectionCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $collection
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.collection-card');
    }
}
