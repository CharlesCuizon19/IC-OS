<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class role_descriptions extends Model
{
    use HasFactory;

    public function role_descriptions(): HasOne
    {
        return $this->hasOne(role_descriptions::class, 'role_description_id');
    }
}
