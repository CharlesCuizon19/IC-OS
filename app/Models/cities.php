<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class cities extends Model
{
    use HasFactory;


    protected $fillable = [
        'city_name',
        'country_id',
    ];

    public function cities(): HasOne
    {
        return $this->hasOne(cities::class, 'city_id');
    }

    public function countries()
    {
        return $this->belongsTo(countries::class, 'country_id');
    }
}
