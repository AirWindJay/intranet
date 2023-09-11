<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class glindex extends Model
{
    protected $table = 'hospital.jhay.guaranteeletter_index';
    protected $primaryKey = 'id';
    public $timestamps = false ;

    protected $fillable = [
        'details', 'created_at'
    ];
}
