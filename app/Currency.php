<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function binaryOptions(){
        return $this->hasMany('App\BinaryOption');
    }
}
