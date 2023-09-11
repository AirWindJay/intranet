<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicerequestcsat extends Model
{
    protected $table = 'jhay.intranet_servicerequestcsat';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'servicerequest_id',
        'bghmc_employee',
        'purpose1',
        'purpose2',
        'purpose3',
        'purpose4',
        'purpose5',
        'purpose6',
        'purpose7',
        'purpose7_1',
        'purpose7_2',
        'purpose8',
        'purpose_others',
        'survey1',
        'survey2',
        'survey3',
        'survey4',
        'survey5',
        'survey6',
        'satisfied',
        'rating',
        'requester_name',
        'requester_address',
        'requester_contact',
    ];
}
