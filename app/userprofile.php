<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userprofile extends Model
{
    protected $table = 'jhay.intranet_profile';
    protected $primaryKey ='id';
    public $incrementing = false;
    public $timestamps = false ;

    protected $fillable = [
        'employeeid', 'nick_name', 'fav_saying', 'birthdate'
    ];
}
