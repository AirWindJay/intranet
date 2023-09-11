<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ccruposts extends Model
{
    protected $table = 'jhay.intranet_ccrupost';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'employeeid', 'doc_date','yearnnumber', 'title', 'type_document', 'detail', 'for_omcc', 'for_medical', 'for_nursing', 'for_hopss', 'for_finance', 'is_archived'
    ];

    public function image() {
        return $this->hasMany('App\image','ccru_id');
    }

    
}
