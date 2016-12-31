<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBinaryOptionRequest;
use Illuminate\Http\Request;

class BinaryOptionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function createBinaryOption(CreateBinaryOptionRequest $request){
        var_dump($request);
    }
}
