<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ward extends Model
{
    protected $table = 'jhay.intranet_ward';
    protected $primaryKey ='id';
    public $incrementing = false;
    public $timestamps = false ;

    protected $fillable = [
        'ward_name',
    ];
}
