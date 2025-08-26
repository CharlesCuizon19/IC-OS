<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class images extends Model
{
    use HasFactory;
    public function files()
    {
        return $this->belongsTo(files::class, 'file_id');
    }

    public function banners(): HasOne
    {
        return $this->hasOne(banners::class, 'image_id');
    }

    public function blogs(): HasOne
    {
        return $this->hasOne(blogs::class, 'cover_image_id');
    }
}
