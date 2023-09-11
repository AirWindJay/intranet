<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MMOitems extends Model
{
    protected $table = 'item_management.dbo.end_user_item';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'item_id', 'end_user_id'
    ];

    public function items(){
        return $this->hasOne('App\items', 'id', 'item_id');
    }

    public function price_balances(){
        return $this->hasMany('App\price_balances', 'end_user_item_id', 'id');
    }
}
