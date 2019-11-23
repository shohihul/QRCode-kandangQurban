<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    //
    protected$fillabel=[
        'name',
    ];
    public function cattlemans(){
    	return $this->hasMany('App\cattleman');
    }
}
