<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('card_sets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('set_series_id')->constrained('set_series');
            $table->string('code')->unique();
            $table->string('slug')->unique();
            $table->string('name');
            $table->integer('total_cards')->nullable();
            $table->date('release_date')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('symbol_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('card_sets');
    }
};
