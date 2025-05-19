<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CollectionCard extends Model
{
    protected $fillable = [
        'collection_id',
        'variant_id',
        'condition_id',
        'quantity',
        'order_index',
        'notes'
    ];

    protected $casts = [
        'quantity' => 'integer',
        'order_index' => 'integer'
    ];

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    public function variant(): BelongsTo
    {
        return $this->belongsTo(Variant::class);
    }

    public function condition(): BelongsTo
    {
        return $this->belongsTo(Condition::class);
    }

    // Helper method to get the associated card through the variant
    public function card()
    {
        return $this->variant->card;
    }
}
