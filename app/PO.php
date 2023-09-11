<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price_balances extends Model
{
    protected $table = 'item_management.dbo.price_balances';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'end_user_item_id', 'price', 'balance'
    ];

    public function MMOitems()
    {
        return $this->belongsTo('App\MMOitems');
    }
}
