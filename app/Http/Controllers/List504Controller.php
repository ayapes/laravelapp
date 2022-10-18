<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class List504Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
    return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request){

        $items = DB::select('select * from people');
    return view('hello.index', ['items' => $items]);

    }

    public function add(Request $request){

        $items = DB::select('select * from people');
        return view('hello.add', ['items' => $items]);
    }

    public function create(Request $request){
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name,mail,age) values (:name, :mail, :age)',$param);
        return redirect('/list504/add');
    }

}
