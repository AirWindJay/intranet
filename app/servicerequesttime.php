<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicerequesttime extends Model
{
    protected $table = 'jhay.intranet_servicerequesttime';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'service_id', 'time_process', 'time_finish', 'time_acknowledge'
    ];
}
