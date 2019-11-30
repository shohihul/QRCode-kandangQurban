<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogViewCattleman extends Model
{
    //
    protected$fillabel=[
        'ip_address', 'cattleman_id'
    ];

    public function cattleman(){
    	return $this->belongsTo('App\Models\Cattleman');
    }
}
