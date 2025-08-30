<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class doctors extends Model
{
    use HasFactory;

    public function doctor(): HasOne
    {
        return $this->hasOne(doctors::class, 'doctor_id');
    }

    public function doctor_institutions(): HasMany
    {
        return $this->hasMany(doctor_institutions::class, 'doctor_id');
    }

    public function specializations()
    {
        return $this->belongsTo(specializations::class, 'specialization_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
