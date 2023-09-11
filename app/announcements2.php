<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcements2 extends Model
{


    protected $table = 'jhay.intranet_announcement2';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'title', 'division', 'detail', 'is_archived', 'employeeid', 'is_webmas', 'created_at', 'updated_at'
    ];

    public function animage() {
        return $this->hasMany('App\animage2','ann_id');
    }
}
