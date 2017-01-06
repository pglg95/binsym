<?php

namespace App\Http\Controllers;

use App\BinaryOption;
use App\Currency;
use App\User;
use Auth;
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
    private function refreshRates(){
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
    public function hourlyAction(){
        $this->refreshRates();

        $currentDateTime=date('Y-m-d H:i:s');
        $activeOptions=BinaryOption::where('state','=','1')->where('finish_date','<',$currentDateTime)->get();

        foreach($activeOptions as $activeOption){
            $currency=Currency::findOrFail($activeOption->currency_id);

            $activeOption->finish_rate=$currency->current_rate;
            $activeOption->state=0;

            if(($activeOption->start_rate > $currency->current_rate && $activeOption->speculation==0) ||
                ($activeOption->start_rate < $currency->current_rate && $activeOption->speculation==1)){

                if($this->getDaysBetweenDates($activeOption->finish_date,$activeOption->created_at)>=2)
                    $newUserMoney=($activeOption->value*$currency->return_value_2)/100;
                else
                    $newUserMoney=($activeOption->value*$currency->return_value_1)/100;

                $activeOption->revenue=$newUserMoney;

                $user=User::findOrFail($activeOption->user_id);
                $user->money+=$newUserMoney;

                $activeOption->save();
                $user->save();

            }
        }
    }

    private function getDaysBetweenDates($date1,$date2){
        $dateDiff=strtotime($date1)-strtotime($date2);
        return floor($dateDiff / (60 * 60 * 24));
    }

}
