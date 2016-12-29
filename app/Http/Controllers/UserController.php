<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllBinaryOptions($userId){
        return view('history');
    }
}
