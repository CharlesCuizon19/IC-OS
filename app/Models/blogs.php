<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
