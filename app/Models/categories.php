<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class categories extends Model
{
    use HasFactory;

    public function categories(): HasOne
    {
        return $this->hasOne(categories::class, 'categories_id');
    }
}
