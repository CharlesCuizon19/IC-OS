<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_roles extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->belongsTo(roles::class, 'role_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
