<?php

namespace App\Http\Controllers;

use App\BinaryOption;
use App\Http\Requests\CreateBinaryOptionRequest;
use Auth;
use DateTime;
use Illuminate\Http\Request;
use App\Currency;

class BinaryOptionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function createBinaryOption(CreateBinaryOptionRequest $request){
        $binaryOption=new BinaryOption();

        $binaryOption->value=$request->input('value');

        $finishDate=DateTime::createFromFormat('d-m-Y H',$request->input('finish_date'))->format('Y-m-d H:i:s');
        $binaryOption->setAttribute("finish_date",$finishDate);

        $currencyId=$request->input('currency_id');
        $binaryOption->currency_id=$currencyId;

        $currentRate=Currency::where('id',$currencyId)->firstOrFail()->current_rate;
        $binaryOption->start_rate=$currentRate;

        $binaryOption->user_id=Auth::user()->id;

        $binaryOption->speculation=($request->speculation=="up" ? 1 : 0);

        $binaryOption->save();

        return redirect("/currencies");
    }
}
