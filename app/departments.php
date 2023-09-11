<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    protected $table = 'jhay.intranet_department';
    protected $primaryKey ='id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'deparment', 'division',
    ];
}
