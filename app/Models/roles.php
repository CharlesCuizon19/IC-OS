<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class roles extends Model
{
    use HasFactory;

    public function roles(): HasOne
    {
        return $this->hasOne(roles::class, 'role_id');
    }

    public function role_descriptions()
    {
        return $this->belongsTo(role_descriptions::class, 'role_description_id');
    }
}
