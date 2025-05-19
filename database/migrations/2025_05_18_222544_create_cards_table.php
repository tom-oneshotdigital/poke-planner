<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_id')->nullable()->constrained('pokemon')->onDelete('set null');
            $table->foreignId('set_id')->constrained('card_sets');
            $table->string('collector_number', 20);
            $table->foreignId('rarity_id')->nullable()->constrained('rarities')->onDelete('set null');
            $table->foreignId('type_id')->nullable()->constrained('card_types')->onDelete('set null');
            $table->string('subtype', 100)->nullable();
            $table->timestamps();

            $table->unique(['set_id', 'collector_number']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
