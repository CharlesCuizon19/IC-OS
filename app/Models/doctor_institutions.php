<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor_institutions extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_id', 'institution_id'];

    public function institutions()
    {
        return $this->belongsTo(institutions::class, 'institution_id');
    }

    public function doctor()
    {
        return $this->belongsTo(doctors::class, 'doctor_id');
    }
}
