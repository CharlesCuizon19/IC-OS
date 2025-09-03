<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class institutions extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'website'];

    public function doctor_institutions()
    {
        return $this->hasMany(doctor_institutions::class, 'institution_id');
    }
}
