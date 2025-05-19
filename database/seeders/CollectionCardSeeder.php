<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\CollectionCard;
use App\Models\Condition;
use App\Models\Variant;
use Illuminate\Database\Seeder;

class CollectionCardSeeder extends Seeder
{
    public function run(): void
    {
        $collection = Collection::first();
        if (!$collection) {
            return;
        }

        $nearMintCondition = Condition::where('description', 'Near Mint (NM)')->first();
        $excellentCondition = Condition::where('description', 'Excellent (EX)')->first();

        $variants = Variant::take(3)->get();

        $cards = [
            [
                'collection_id' => $collection->id,
                'variant_id' => $variants[0]->id,
                'condition_id' => $nearMintCondition->id,
                'quantity' => 2,
                'order_index' => 1,
                'notes' => 'First edition'
            ],
            [
                'collection_id' => $collection->id,
                'variant_id' => $variants[1]->id,
                'condition_id' => $excellentCondition->id,
                'quantity' => 1,
                'order_index' => 2,
                'notes' => 'Light edge wear'
            ]
        ];

        foreach ($cards as $card) {
            CollectionCard::create($card);
        }
    }
}
