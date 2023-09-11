<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicerequest extends Model
{
    protected $table = 'jhay.intranet_servicerequest';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'employeeid', 'officerid', 'category', 'location', 'remarks', 'ack_remarks', 'status', 'created_at'
    ];
}
