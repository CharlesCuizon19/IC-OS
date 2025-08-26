<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class blog_images extends Model
{
    use HasFactory;

    public function images(): HasOne
    {
        return $this->hasOne(images::class, 'id', 'image_id');
    }

    public function blogs(): HasOne
    {
        return $this->hasOne(blogs::class, 'id', 'blog_id');
    }
}
