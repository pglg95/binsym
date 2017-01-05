<?php

namespace App\Http\Controllers;

use App\BinaryOption;
use App\Currency;
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

    public static function getRankPosition($userId){
       echo DB::statement(DB::raw('set @rownum=0'))->toSql();
        $users = User::select([
            DB::raw('(@rownum  := @rownum  + 1) AS rownum')]);
        $datatables = Datatables::of($users);
        return $datatables->make(true);
    }

}
