<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reminders extends Model
{
    protected $table = 'jhay.intranet_reminders';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'reminders', 'stat', 'Created_at'
    ];

}
