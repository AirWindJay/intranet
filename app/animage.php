<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class animage extends Model
{
    protected $table = 'jhay.intranet_animage';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ann_id', 'file', 'extension',
    ];

    public function announcements()
    {
        return $this->belongsTo('App\announcements');
    }

}
