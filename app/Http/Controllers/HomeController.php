<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            $rankUsers=$this->getRank();
            return view('index')->with('rankUsers',$rankUsers);
        }
        else
            return redirect("/currencies");
    }

    private function getRank(){
        $minRankMoneyValue=User::select('money')->orderBy('money','desc')->limit('10')->get();
        if(count($minRankMoneyValue)>0){
            $firstQueryResult= $minRankMoneyValue[$minRankMoneyValue->count()-1]['money'];

            $rankUsers=User::select('name','money')->where('money','>=',$firstQueryResult)->get();
        }
        else $rankUsers=array();


        return $rankUsers;
    }
}
