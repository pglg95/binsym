<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class CurrenciesController extends Controller
{
    private function getRandomColorForCurrencyDiv($currencyCount){
        $currency=array();
        for ($i=0;$i<$currencyCount;$i++){
            $randNum=rand(0,5);
            switch($randNum){
                case 0: array_push($currency,'green');
                    break;
                case 1: array_push($currency,'yellow');
                    break;
                case 2: array_push($currency,'orange');
                    break;
                case 3: array_push($currency,'blue');
                    break;
                case 4: array_push($currency,'red');
                    break;
                case 5: array_push($currency,'purple');
            }
        }
        return $currency;
    }

    public function showAll(){
        $currencies=Currency::all();
        $colors=$this->getRandomColorForCurrencyDiv(count($currencies));
        return view('dashboard', compact('currencies','colors'));

    }
    public function showById($id){
        $currency=Currency::findOrFail($id);
        return view('buy',compact('currency'));
    }
}
