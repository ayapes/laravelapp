<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List312Controller extends Controller
{
    public function index()
    {
return view('hello.index',['msg'=>'']);
    }

    public function post(Request $request)
    {
return view('hello.index',['msg'=>$request->msg]);
    }
}
