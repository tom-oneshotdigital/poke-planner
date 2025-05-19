<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('collection_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collection_id')->constrained('collections')->onDelete('cascade');
            $table->foreignId('variant_id')->constrained('variants')->onDelete('cascade');
            $table->foreignId('condition_id')->constrained('conditions');
            $table->integer('quantity')->default(1);
            $table->integer('order_index')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            // Index for ordering
            $table->index(['collection_id', 'order_index']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('collection_cards');
    }
};
