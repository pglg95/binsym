<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrenciesController extends Controller
{
    public function getAll(){
        return view('dashboard');
    }
    public function get($id){
        return view('buy');
    }
}
