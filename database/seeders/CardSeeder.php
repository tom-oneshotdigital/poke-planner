<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\CardSet;
use App\Models\CardType;
use App\Models\Pokemon;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    public function run(): void
    {
        $baseSet = CardSet::where('name', 'Scarlet & Violet Base Set')->first();
        $pokemonType = CardType::where('name', 'Pokémon')->first();
        $commonRarity = Rarity::where('name', 'Common')->first();

        $cards = [
            [
                'pokemon_id' => Pokemon::where('name', 'Pikachu')->first()?->id,
                'set_id' => $baseSet->id,
                'collector_number' => '054/198',
                'rarity_id' => $commonRarity->id,
                'type_id' => $pokemonType->id,
                'subtype' => 'Basic'
            ],
            // Add more cards as needed
        ];

        foreach ($cards as $card) {
            Card::create($card);
        }
    }
}
