<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'text'
    ];

    public function currency(){
        return $this->belongsTo('App\Currency');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
