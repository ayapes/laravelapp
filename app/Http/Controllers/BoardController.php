<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(request $request){
        $items = Board::all();
        return view('board.index',['items' => $items]);

    }

    public function create(Request $request){
        $this->validate($request,Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }
}
