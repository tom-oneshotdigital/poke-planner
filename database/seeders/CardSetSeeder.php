<?php

namespace Database\Seeders;

use App\Models\CardSet;
use App\Models\SetSeries;
use Database\Seeders\CardSetSeeders\SMSeeder;
use Database\Seeders\CardSetSeeders\SVSeeder;
use Database\Seeders\CardSetSeeders\SWSHSeeder;
use Database\Seeders\CardSetSeeders\XYSeeder;
use Illuminate\Database\Seeder;

class CardSetSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SVSeeder::class,
            SWSHSeeder::class,
            SMSeeder::class,
            XYSeeder::class
        ]);

//        $swordAndShield = SetSeries::where('name', 'Sword & Shield')->first();
//        $scarletViolet = SetSeries::where('name', 'Scarlet & Violet')->first();
//
//        $sets = [
//            [
//                'series_id' => $swordAndShield->id,
//                'name' => 'Sword & Shield Base Set',
//                'release_date' => '2020-02-07'
//            ],
//            [
//                'series_id' => $swordAndShield->id,
//                'name' => 'Rebel Clash',
//                'release_date' => '2020-05-01'
//            ],
//            [
//                'series_id' => $swordAndShield->id,
//                'name' => 'Darkness Ablaze',
//                'release_date' => '2020-08-14'
//            ],
//            [
//                'series_id' => $scarletViolet->id,
//                'name' => 'Scarlet & Violet Base Set',
//                'release_date' => '2023-03-31'
//            ],
//            [
//                'series_id' => $scarletViolet->id,
//                'name' => 'Paldea Evolved',
//                'release_date' => '2023-06-09'
//            ]
//        ];
//
//        foreach ($sets as $set) {
//            CardSet::create($set);
//        }
    }
}
