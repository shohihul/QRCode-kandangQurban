<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log_views_cattlemans extends Model
{
    //
    protected$fillabel=[
        'ip_address',
    ];

    public function cattlemans(){
    	return $this->belongsTo('App\cattlemans');
    }
}
