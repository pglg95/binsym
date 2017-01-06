<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function installCurrencies(){
        $eurusd=new Currency();
        $eurusd->code='EUR/USD';
    }
}
