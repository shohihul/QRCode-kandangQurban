<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveStockCategorie extends Model
{
    //
    protected$fillabel=[
        'name',
    ];

    public function livestock_types(){
    	return $this->hasMany('App\LivestockType');
    }
}
