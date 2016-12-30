<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinaryOption extends Model
{
    protected $fillable = [
        'value',
        'finish_date',
        'speculation'
    ];

    public function currency(){
        return $this->belongsTo('App\Currency');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
