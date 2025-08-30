<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class specializations extends Model
{
    use HasFactory;

    public function specializations(): HasOne
    {
        return $this->hasOne(specializations::class, 'specialization_id');
    }
}
