<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardSet extends Model
{
    protected $fillable = [
        'series_id',
        'name',
        'release_date'
    ];

    protected $casts = [
        'release_date' => 'date'
    ];

    public function series(): BelongsTo
    {
        return $this->belongsTo(SetSeries::class, 'series_id');
    }
}
