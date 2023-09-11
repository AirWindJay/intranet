<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forisocsat extends Model
{
    protected $table = 'jhay.intranet_foriso';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'bghmc_employee',
        'unit_id',
        'staff_name',
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
        'time_survey',
        'survey1',
        'survey2',
        'survey3',
        'survey4',
        'survey5',
        'survey6',
        'satisfied',
        'comment_type',
        'comment',
        'requester_name',
        'requester_address',
        'requester_contact',
    ];
}
