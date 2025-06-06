<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('variant_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->boolean('is_foil_default');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('variant_types');
    }
};
