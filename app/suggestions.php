<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggestions extends Model
{
    protected $table = 'jhay.intranet_suggestion';
    protected $primaryKey ='id';
    public $incrementing = false;
    public $timestamps = false ;

    protected $fillable = [
        'employeeid', 'msg', 'created_at'
    ];
}
