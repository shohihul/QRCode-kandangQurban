<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cattleman extends Authenticatable
{
   
    protected $table = 'cattlemans';

    protected $fillable=[
        'email','name','address','gender', 'regencie_id', 'password', 'photo_profile', 'qr_code', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function livestock(){
        return $this->hasMany('App\Models\Livestock');
    }

    public function regencie(){
        return $this->belongsTo('App\Models\Regencie');
    }

    public function logViewCattleman(){
        return $this->hasMany('App\Models\LogViewCattleman');
    }

    public function cattlemansHistory(){
        return $this->hasMany('App\Models\CattlemanHistory');
    }


}
