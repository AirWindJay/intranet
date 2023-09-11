<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gl extends Model
{
    protected $table = 'hospital.les.guaranteeLetter2018';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false ;

    protected $fillable = [
        'glnumber', 'ctrlno', 'hpercode', 'fundcode', 'refdate', 'expdate', 'amount', 'purpose', 'entryby', 'glstat', 'dtCreated', 'edited'
    ];
}
