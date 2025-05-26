<?php

namespace Database\Seeders;

use App\Models\SetSeries;
use Illuminate\Database\Seeder;

class SetSeriesSeeder extends Seeder
{
    public function run(): void
    {
        $series = [
            [
                'name' => 'Scarlet & Violet',
                'description' => 'The Scarlet & Violet Series featuring Pokémon from the Paldea region'
            ],
            [
                'name' => 'Sword & Shield',
                'description' => 'The Sword & Shield Series featuring Pokémon from the Galar region'
            ],
            [
                'name' => 'Sun & Moon',
                'description' => 'The Sun & Moon Series featuring Pokémon from the Alola region'
            ],
            [
                'name' => 'XY',
                'description' => 'The XY Series featuring Pokémon from the Kalos region'
            ],
            [
                'name' => 'Black & White',
                'description' => 'The Black & White Series featuring Pokémon from the Unova region'
            ],
            [
                'name' => 'HeartGold & SoulSilver',
                'description' => 'The HeartGold & SoulSilver Series featuring Pokémon from the Johto region'
            ],
            [
                'name' => 'Platinum',
                'description' => 'The Platinum Series featuring Pokémon from the Sinnoh region'
            ],
            [
                'name' => 'Diamond & Pearl',
                'description' => 'The Diamond & Pearl Series featuring Pokémon from the Hoenn region'
            ],
            [
                'name' => 'POP',
                'description' => 'The POP Series featuring Pokémon from the Sinnoh region'
            ],
            [
                'name' => 'NP',
                'description' => ''
            ],
            [
                'name' => 'EX',
                'description' => 'The EX Series featuring Pokémon from the Johto region'
            ],
            [
                'name' => 'E-Card',
                'description' => ''
            ],
            [
                'name' => 'NEO',
                'description' => ''
            ],
            [
                'name' => 'Gym',
                'description' => 'The Gym Series featuring Pokémon from the Kanto region'
            ],
            [
                'name' => 'Base',
                'description' => 'The Base Series featuring Pokémon from the Kanto region'
            ],
            [
                'name' => 'Other',
                'description' => 'Other Pokémon sets'
            ],
            [
                'name' => 'Holiday Collections',
                'description' => 'Holiday Collections'
            ]
        ];

        foreach ($series as $series_data) {
            SetSeries::create($series_data);
        }
    }
}
