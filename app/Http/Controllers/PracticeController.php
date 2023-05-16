<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    function practice():string{
        return "this is my first request response";
    }
    function parameter(Request $request):string{
        $name=$request->name;
        $age=$request->age;

        return  "my name is ${name} and my age ${age}";
    }
}
