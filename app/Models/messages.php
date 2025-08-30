<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class messages extends Model
{
    use HasFactory;

    public function messages(): HasOne
    {
        return $this->hasOne(messages::class, 'message_id');
    }
}
