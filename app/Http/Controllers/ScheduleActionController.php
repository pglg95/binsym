<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class ScheduleActionController extends Controller
{
    private function getCurrenciesCurrentRates(){
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
    public function refreshRates(){
        $currenciesRate=$this->getCurrenciesCurrentRates();
        $dbCurrencies=Currency::all('code');
        foreach ($dbCurrencies as $dbCurrency){
            foreach ($currenciesRate as $currencyRate){
                if(strcmp($currencyRate[0],$dbCurrency->code)==0){
                    Currency::where('code', $dbCurrency->code)
                        ->update(['current_rate' => $currencyRate[1]]);
                    break;
                }
            }
        }

    }

}
