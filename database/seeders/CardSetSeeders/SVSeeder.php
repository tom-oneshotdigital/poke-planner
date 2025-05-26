<?php

namespace Database\Seeders\CardSetSeeders;

use App\Models\CardSet;
use App\Models\SetSeries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Pokemon\Pokemon;

class SVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Initialize Pokemon TCG SDK
        $pokemon = new Pokemon();

        // Get the Scarlet & Violet series
        $scarletViolet = SetSeries::firstOrCreate([
            'name' => 'Scarlet & Violet',
            'description' => 'The Scarlet & Violet Series featuring Pokémon from the Paldea region',
            'abbreviation' => 'SV'
        ]);

        // List of Scarlet & Violet set IDs from the API
        $svSets = [
            'sv1', // Base Set
            'sv2', // Paldea Evolved
            'sv3', // Obsidian Flames
            'sv3pt5', // Pokemon 151
            'sv4', // Paradox Rift
            'sv4pt5', // Paldea Fates
            'sve', // Energy cards
            'svp', // Promos
        ];

        foreach ($svSets as $setId) {
            try {
                $setData = $pokemon->set()->find($setId);

                $set = CardSet::firstOrCreate(
                    [
                        'set_series_id' => $scarletViolet->id,
                        'name' => $setData->getName(),
                        'slug' => Str::slug($setData->getName()),
                        'code' => $setData->getPtcgoCode() ?? substr($setData->getId(), -3),
                        'total_cards' => $setData->getTotal(),
                        'release_date' => $setData->getReleaseDate(),
                        'logo_url' => $setData->getImages()->getLogo(),
                        'symbol_url' => $setData->getImages()->getSymbol(),
                    ]
                );

                $this->command->info("Added set: {$set->name}");
            } catch (\Exception $e) {
                $this->command->error("Error adding set {$setId}: " . $e->getMessage());
            }
        }
    }
}
