<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_images extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->belongsTo(images::class, 'id', 'image_id');
    }

    public function blogs()
    {
        return $this->belongsTo(blogs::class, 'blog_id');
    }
}
