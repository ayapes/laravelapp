<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarketController extends Controller
{
    public function index(Request $request){
        $items = DB::table('items')->orderBy('id','desc')->get();
        $cates = DB::table('category')->orderBy('id','desc')->get();
        return view('market.index',['items' => $items,'cates' => $cates]);
    }

    public function post(Request $request){

        $items = DB::select('select * from items');
    return view('market.index', ['items' => $items]);

    }

    // public function add(Request $request){
    //     $items = DB::select('select * from items');
    //     return view('market.index', ['items' => $items]);
    // }

    public function create(Request $request){
        $param = [
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
        ];
        DB::table('items')->insert($param);
        return redirect('/market');
    }

    public function edit(Request $request){
        $item = DB::table('items')
        ->where('id',$request->id)->first();
        $cates = DB::table('category')->orderBy('id','desc')->get();
        return view('market.edit',['form' => $item,'cates' => $cates]);
    }

    public function update(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
        ];
        DB::table('items')
        ->where('id',$request->id)
        ->update($param);
        return redirect('/market');
    }

    public function del(Request $request){
        $item = DB::table('items')
        ->where('id',$request->id)->first();
        return view('market.del',['form' => $item]);
    }

    public function remove(Request $request){
        $item = DB::table('items')
        ->where('id',$request->id)->delete();
        return redirect('/market');
    } 

    public function cate(Request $request){
        $cates = DB::table('category')->orderBy('id','desc')->get();
        
    $prevurl = url()->previous();
        return view('market.category',['cates' => $cates,'prevurl' => $prevurl]);
    }

    public function cate_edit(Request $request){
        $param = [
            'cate_name' => $request->cate_name,
        ];
        DB::table('category')->insert($param);
        $prevurl = url()->previous();
        
        return redirect($prevurl);
        // return redirect($prevurl);
    }

    public function test(Request $request){
        $cates = DB::table('category')->get();
        $cate_names = DB::table('category')->select('cate_name')->get();
        $items = DB::table('items')->where('category','$cate_names')->get();
        return view('market.test',['cates' => $cates,'names' => $cate_names,'items'=>$items]);
    }
}
