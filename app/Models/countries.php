<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class countries extends Model
{
    use HasFactory;

    public function cities(): HasOne
    {
        return $this->hasOne(cities::class, 'country_id');
    }
}
