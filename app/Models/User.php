<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasFactory;


    protected $table = 'users';
    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_active', // Assuming you have a role field
    ];

    public function User(): HasOne
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function profiles(): HasOne
    {
        return $this->hasOne(profiles::class, 'user_id');
    }

    public function doctor(): HasOne
    {
        return $this->hasOne(doctors::class, 'user_id');
    }

    public function user_roles(): HasMany
    {
        return $this->hasMany(user_roles::class, 'user_id');
    }
}
