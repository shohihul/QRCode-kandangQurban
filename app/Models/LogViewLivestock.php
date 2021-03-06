<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogViewLivestock extends Model
{
    protected $table = 'log_view_livestocks';

    protected $fillabel=[
        'ip_address', 'livestock_id'
    ];

    public function livestock(){
    	return $this->belongsTo('App\Models\Livestock');
    }
}
