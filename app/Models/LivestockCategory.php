<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivestockCategory extends Model
{
    protected $table = 'livestocks_categories';

    protected $fillabel=[
        'name',
    ];

    public function livestockType(){
    	return $this->hasMany('App\Models\LivestockType');
    }
}
