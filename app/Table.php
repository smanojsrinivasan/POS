<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Table extends Model
{

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function order(){
    	return $this->hasOne('App\Order');
    }

}
