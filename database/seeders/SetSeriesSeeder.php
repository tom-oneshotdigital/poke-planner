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
                'name' => 'Scarlet & Violet',
                'description' => 'The Scarlet & Violet Series featuring Pokémon from the Paldea region'
            ]
        ];

        foreach ($series as $series_data) {
            SetSeries::create($series_data);
        }
    }
}
