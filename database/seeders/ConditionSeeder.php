<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    public function run(): void
    {
        $conditions = [
            ['description' => 'Mint (MT)'],
            ['description' => 'Near Mint (NM)'],
            ['description' => 'Excellent (EX)'],
            ['description' => 'Very Good (VG)'],
            ['description' => 'Good (G)'],
            ['description' => 'Light Played (LP)'],
            ['description' => 'Played (P)'],
            ['description' => 'Heavy Played (HP)'],
            ['description' => 'Poor (PR)'],
            ['description' => 'Damaged (DMG)']
        ];

        foreach ($conditions as $condition) {
            Condition::create($condition);
        }
    }
}
