<?php

namespace Database\Seeders;

use App\Models\CollectionType;
use Illuminate\Database\Seeder;

class CollectionTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            [
                'name' => 'Master Set',
                'description' => 'A complete collection of cards from a set'
            ],
            [
                'name' => 'Binder',
                'description' => 'A general collection stored in a binder'
            ],
            [
                'name' => 'Deck',
                'description' => 'A playable deck of cards'
            ],
            [
                'name' => 'Trade Binder',
                'description' => 'A collection of cards available for trading'
            ],
            [
                'name' => 'Wishlist',
                'description' => 'A list of desired cards'
            ],
        ];

        foreach ($types as $type) {
            CollectionType::create($type);
        }
    }
}
