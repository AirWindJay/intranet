<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected $table = 'item_management.dbo.items';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'description', 'cat_id', 'unit_id', 'ssl', 'rop', 'created_at'
    ];

    public function MMOitems()
    {
        return $this->belongsTo('App\MMOitems');
    }
}
