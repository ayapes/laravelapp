<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello5controller extends Controller
{
    // ↓ルートパラメータの使用
    // public function index($id='noname',$pass='unknown'){

    // シングルアクションコントローラ
    public function __invoke()
    {
        return <<<EOF
<html>
<head>
<title>Hrllo/Index</title>
<style>
body{
font-size: 16pt;
color:#999;}
h1{
font-size: 100pt;
text-align: right;
color:rgb(200, 216, 192);
margin: -40px 0pc -50px 0px;}
</style>
</head>
<body>
<h1>__invoke</h1>
<p>これはHello5コントローラのシングルアクションコントローラのアクションです</p>
</body>
</html>
EOF;
    }
}
