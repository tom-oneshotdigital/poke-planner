<?php

namespace Database\Seeders;

use App\Models\VariantType;
use Illuminate\Database\Seeder;

class VariantTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            [
                'name' => 'Normal',
                'is_foil_default' => false
            ],
            [
                'name' => 'Holo',
                'is_foil_default' => true
            ],
            [
                'name' => 'Reverse Holo',
                'is_foil_default' => true
            ],
            [
                'name' => 'Full Art',
                'is_foil_default' => true
            ],
            [
                'name' => 'Alt Art',
                'is_foil_default' => true
            ],
            [
                'name' => 'Secret Rare',
                'is_foil_default' => true
            ],
            [
                'name' => 'Rainbow Rare',
                'is_foil_default' => true
            ]
        ];

        foreach ($types as $type) {
            VariantType::create($type);
        }
    }
}
