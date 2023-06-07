<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalcController extends Controller
{
  public function store(Request $request){

    switch($request->operand){
        
        case '+':
            $result = $request->first+$request->second;
        break;

        case '-':
            $result = $request->first-$request->second;
        break;

        case '*':
            $result = $request->first*$request->second;
        break;

        case '/':
            $result = $request->first/$request->second;
        break;

    }
    echo $result;
  }
}
