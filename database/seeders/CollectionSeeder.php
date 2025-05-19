<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\User;
use App\Models\CollectionType;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    public function run(): void
    {
        // Get the first user or create one if none exists
        $user = User::first() ?? User::factory()->create();

        // Get collection types
        $collectionTypes = CollectionType::all();

        // Create one collection of each type for the user
        foreach ($collectionTypes as $type) {
            Collection::create([
                'user_id' => $user->id,
                'collection_type_id' => $type->id,
                'name' => $user->name . "'s " . $type->name,
                'description' => "This is a " . strtolower($type->name) . " collection."
            ]);
        }
    }
}
