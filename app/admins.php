<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
 
    //
    protected $fillable=[
        'email','name','password',

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
