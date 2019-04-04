<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    protected $fillable = [
        'user', 'password', 'status', 'remember_token', 'created_at', 'uploaded_at'
    ];
}
