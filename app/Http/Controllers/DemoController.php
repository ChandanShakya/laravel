<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo($id){
        return "User id: $id";
        }
        
        public function oddEven($num){
        if($num%2==0){
            return "Even";
        }else{
            return "Odd";
        }
    }
    
}
