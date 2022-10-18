<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List301Controller extends Controller
{
    public function index()
    {
        return view('hello.index');
    }
    public function msg()
    {
        $data = ['msg' => 'これはコントローラから渡されたメッセージです。'];
        return view('hello.index', $data);
    }

    public function id($id = 'zero')
    {
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $id
        ];
        return view('hello.index', $data);
    }
}
