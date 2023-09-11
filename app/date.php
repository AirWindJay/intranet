<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class date extends Model
{

    protected $table = 'jhay.intranet_date';
    protected $primaryKey ='id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'thismonth', 'nextmonth',
    ];
}
