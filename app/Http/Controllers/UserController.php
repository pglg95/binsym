<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getAllBinaryOptions($userId){
        if(Auth::user()->id != $userId)
            return redirect("/currencies");
        else return view('history');
    }
}
