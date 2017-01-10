<?php

namespace App\Http\Controllers;

use App\BinaryOption;
use App\Currency;
use App\Http\Requests\ChangePassRequest;
use App\User;
use DB;
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
        else{
            $binaryOptions=BinaryOption::where('user_id',$userId)->orderBy('finish_date','desc')->get();
            $binaryOptionsRatingCodes=array();
            foreach ($binaryOptions as $binaryOption){
                $ratingCode=Currency::where('id',$binaryOption->currency_id)->value('code');
                array_push($binaryOptionsRatingCodes,$ratingCode);
            }
            return view('history',compact('binaryOptions','binaryOptionsRatingCodes'));
        }
    }
    public function getChangePassForm($userId){
        if(Auth::user()->id != $userId)
            return redirect("/currencies");
        else{
            return view('changePass')->with('userId',Auth::user()->id);
        }
    }

    public function changePass(ChangePassRequest $request){
        if(Auth::user()->id != $request->input('userId'))
            return redirect("/currencies");
        else{
            $user=Auth::user();
            $user->password=\Hash::make($request->input('password'));
            $user->save();
            return redirect("/currencies");
        }
    }


}
