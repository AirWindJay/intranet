<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornursing extends Model
{
    protected $table = 'jhay.intranet_fornursing';

    protected $primaryKey ='id';
    public $incrementing = false;
    public $timestamps = false ;

    protected $fillable = [
        'user_id', 'ward_id', 'is_registered', 'is_active', 'is_thismonth',  'date1', 'date2', 'date3', 'date4', 'date5', 'date6', 'date7', 'date8', 'date9', 'date10', 'date11', 'date12', 'date13', 'date14', 'date15', 'date16', 'date17', 'date18', 'date19', 'date20', 'date21', 'date22', 'date23', 'date24', 'date25', 'date26', 'date27', 'date28', 'date29', 'date30', 'date31',
    ];
}
