<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class List517Controller extends Controller
{
    public function index(Request $request){

        $items = DB::table('people')->get();
        return view('hello.index',['items' => $items]);
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
        // DB::insert('insert into people (name,mail,age) values (:name, :mail, :age)',$param);
        DB::table('people')->insert($param);
        return redirect('/list512');
    }
    public function edit(Request $request){
        $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id',$param);
        $item = DB::table('people')
        ->where('id',$request->id)->first();
        return view('hello.edit',['form' => $item]);
    }

    public function update(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        // DB::update('update people set name =:name, mail = :mail , age = :age where id = :id',$param);
        DB::table('people')
        ->where('id',$request->id)
        ->ipdate($param);
        return redirect('/list517');
    }

    public function del(Request $request){
        $item = DB::table('people')
        ->where('id',$request->id)->first();
        return view('hello.del',['form' => $item]);
    }

    public function remove(Request $request){
        $item = DB::table('people')
        ->where('id',$request->id)->delete();
        return redirect('/list517');
    } 

    public function show(Request $request){
       $page = $request->page;
       $items = DB::table('people')
       ->offset($page * 3)
       ->limit(3)
       ->get();

       return view('hello.show',['items' => $items]);
    }
}
