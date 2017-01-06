<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function binaryOptions(){
        $this->hasMany('App\BinaryOption');
    }

    public function getRankPosition(){
        $allUsers=User::distinct()->select('money')->get()->count();
        $worstUsers=User::select('id')->where('money','<',$this->money)->count();
        return $allUsers-$worstUsers;
    }
}
