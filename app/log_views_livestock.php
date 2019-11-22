<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log_views_livestock extends Model
{
    //
    protected$fillabel=[
        'ip_address',
    ];

    public function livestock(){
    	return $this->belongsTo('App\livestocks');
    }
}
