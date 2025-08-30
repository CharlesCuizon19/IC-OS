<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class gender extends Model
{
    use HasFactory;
    protected $table = 'genders';

    public function gender(): HasOne
    {
        return $this->hasOne(gender::class, 'gender_id');
    }
}
