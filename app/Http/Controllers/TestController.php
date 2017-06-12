<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        return view('test');
    }
    public function test(Request $request){
        //allow input array data
        $a = $request->input('A');

        //expected worst-case time complexity is O(N);
        if(count($a) === 0){
            return 0;
        }
        //expected worst-case space complexity is O(1), beyond input storage
        if(!in_array(1, $a)){
            return 0;
        }else{
            $missingPosition = count($a) + 1; //Plus 1 to get position of missing number
            $sumOfAll = ($missingPosition * ($missingPosition + 1))/2; //Calculate sum of all number including missing number
            $missingNumber = $sumOfAll - array_sum($a);//Get missing number
            return $missingNumber;
        }
    }
}
