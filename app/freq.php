<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class freq extends Model
{
    protected $table = 'webapp.dbo.prescription_freq_ext';
    protected $primaryKey = 'id';

    protected $fillable = [
        'enccode', 'hpercode', 'dmdctr', 'dmdcomb', 'frequency', 'created_at', 'updated_at', 'entry_by'
    ];
}
