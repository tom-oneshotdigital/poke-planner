<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    public function run(): void
    {
        $pokemon = [
            [
                'name' => 'Bulbasaur',
                'national_dex_number' => 1
            ],
            [
                'name' => 'Charmander',
                'national_dex_number' => 4
            ],
            [
                'name' => 'Squirtle',
                'national_dex_number' => 7
            ],
            [
                'name' => 'Pikachu',
                'national_dex_number' => 25
            ],
            [
                'name' => 'Mewtwo',
                'national_dex_number' => 150
            ],
        ];

        foreach ($pokemon as $mon) {
            Pokemon::create($mon);
        }
    }
}
