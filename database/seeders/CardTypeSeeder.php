<?php

namespace Database\Seeders;

use App\Models\CardType;
use Illuminate\Database\Seeder;

class CardTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['name' => 'Pokémon'],
            ['name' => 'Trainer'],
            ['name' => 'Energy'],
            ['name' => 'Special Energy'],
            ['name' => 'Basic Pokémon'],
            ['name' => 'Stage 1'],
            ['name' => 'Stage 2'],
            ['name' => 'BREAK'],
            ['name' => 'LEGEND'],
            ['name' => 'V'],
            ['name' => 'VMAX'],
            ['name' => 'VSTAR']
        ];

        foreach ($types as $type) {
            CardType::create($type);
        }
    }
}
