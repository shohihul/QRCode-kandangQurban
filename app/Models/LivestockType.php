<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivestockType extends Model
{
    //
    protected$fillabel=[
        'name', 'livestock_category_id'
    ];

    public function livestock(){
    	return $this->hasMany('App\Models\Livestock');
    }

    public function livestockCategory(){
    	return $this->belongsTo('App\Models\LivestockCategory');
    }
}
