<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->belongsTo(images::class, 'image_id');
    }

    public function genders()
    {
        return $this->belongsTo(gender::class, 'gender_id');
    }

    public function cities()
    {
        return $this->belongsTo(cities::class, 'city_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'city_id');
    }
}
