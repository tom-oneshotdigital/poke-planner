<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemon'; // Explicitly set table name since 'pokemon' is irregular plural

    protected $fillable = [
        'name',
        'national_dex_number'
    ];
}
