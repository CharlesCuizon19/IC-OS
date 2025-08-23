<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class files extends Model
{
    use HasFactory;

    public function images(): HasOne
    {
        return $this->hasOne(images::class, 'file_id');
    }
}
