<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


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
}
