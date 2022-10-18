<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    public function index(){
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
color:#EEE;
margin: -40px 0pc -50px 0px;}
</style>
</head>
<body>
<h1>Index</h1>
<p>これはHelloコントローラのindexアクションです</p>
</body>
</html>
EOF;
    }
}
