<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetSeries extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function cardSets(): HasMany
    {
        return $this->hasMany(CardSet::class, 'series_id');
    }
}
