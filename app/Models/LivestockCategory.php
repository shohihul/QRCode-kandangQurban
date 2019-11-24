<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LivestockCategory extends Model
{
    //
    protected $fillabel=[
        'name',
    ];

    public function livestockType(){
    	return $this->hasMany('App\Models\LivestockType');
    }
}
