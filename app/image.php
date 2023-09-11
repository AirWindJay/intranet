<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'jhay.intranet_ccruimage';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ccru_id', 'file', 'extension',
    ];

    public function ccruposts()
    {
        return $this->belongsTo('App\ccruposts');
    }

}
