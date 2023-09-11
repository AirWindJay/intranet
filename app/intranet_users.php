<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'jhay.intranet_user';
    protected $primaryKey ='employeeid';
    public $incrementing = false;
    public $timestamps = false ;


    protected $fillable = [
        'role_id', 'department', 'division'
    ];

}
