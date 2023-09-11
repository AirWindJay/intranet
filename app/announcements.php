<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcements extends Model
{


    protected $table = 'jhay.intranet_announcement';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'title', 'division', 'detail', 'is_archived', 'employeeid', 'is_webmas', 'created_at', 'updated_at'
    ];

    public function animage() {
        return $this->hasMany('App\animage','ann_id');
    }
}
