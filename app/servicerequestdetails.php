<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicerequesttime extends Model
{
    protected $table = 'jhay.intranet_servicerequesttime';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'employeeid', 'officerid', 'category', 'location', 'remarks', 'ack_remarks', 'status', 'created_at'
    ];
}
