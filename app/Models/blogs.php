<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class blogs extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }

    public function images()
    {
        return $this->belongsTo(images::class, 'cover_image_id');
    }

    public function blogs(): HasOne
    {
        return $this->hasOne(blogs::class, 'blog_id');
    }
}
