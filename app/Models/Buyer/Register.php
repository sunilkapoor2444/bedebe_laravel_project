<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'users';

    protected $fillable = [ 
        'name', 'email', 'password', 'remember_token', 'user_type' 
    ];
}
