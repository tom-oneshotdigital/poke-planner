<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Variant extends Model
{
    protected $fillable = [
        'card_id',
        'variant_type_id',
        'description'
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }

    public function variantType(): BelongsTo
    {
        return $this->belongsTo(VariantType::class);
    }
}
