<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class CurrenciesController extends Controller
{
    private function getCurrenciesCurrentRate(){
        $dom = new Dom;
        $dom->load('http://webrates.truefx.com/rates/connect.html?f=html');
        $rows=$dom->find('tr');
        $array=array();
        foreach ($rows as $row){
            $stringValue=($row->find('td')[2]->text.$row->find('td')[3]->text);
            array_push($array,array($row->find('td')[0]->text,floatval($stringValue)));
        }
        return $array;
    }
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

    public function getAll(){
        $currencies=$this->getCurrenciesCurrentRate();
        $colors=$this->getRandomColorForCurrencyDiv(count($currencies));
        return view('dashboard', compact('currencies','colors'));

    }
    public function get($id){
        return view('buy');
    }
}
