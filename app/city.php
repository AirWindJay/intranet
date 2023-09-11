<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = 'jhay.intranet_forisocities';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'cty', 'prvnce'
    ];

}
