<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log_view_livestock extends Model
{
    //
    protected$fillabel=[
        'ip_address',
    ];

    public function livestock(){
    	return $this->belongsTo('App\livestock');
    }
}
