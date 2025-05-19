<?php

namespace Database\Seeders;

use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RaritySeeder extends Seeder
{
    public function run(): void
    {
        $rarities = [
            ['name' => 'Common'],
            ['name' => 'Uncommon'],
            ['name' => 'Rare'],
            ['name' => 'Rare Holo'],
            ['name' => 'Rare Ultra'],
            ['name' => 'Rare Secret'],
            ['name' => 'Rare Rainbow'],
            ['name' => 'Rare Shining'],
            ['name' => 'Amazing Rare'],
            ['name' => 'Promo'],
            ['name' => 'Rare Prime'],
            ['name' => 'Classic Collection'],
            ['name' => 'Radiant Rare'],
            ['name' => 'Illustration Rare'],
            ['name' => 'Special Illustration Rare']
        ];

        foreach ($rarities as $rarity) {
            Rarity::create($rarity);
        }
    }
}
