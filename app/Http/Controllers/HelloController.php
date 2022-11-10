<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
Use App\Person;

class Hellocontroller extends Controller
{
    public function index(Request $request){

        $user = Auth::user();
        // $sort = $request->sort;
        $items = Person::simplePaginate(3);
        $param = ['items' => $items,'user'=>$user];

        return view('hello.index',$param);


       
}
}