<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class List215Controller extends Controller
{
    public function index(Request $request, Response $response){

$html = <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body{
font-size: 16pt;
color:#333;}
h1{
font-size: 100pt;
text-align: right;
color:rgb(200, 216, 192);
margin: -40px 0pc -50px 0px;}
</style>
</head>
<body>
<h1>Hello</h1>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>{$response}</pre>
</body>
</html>
EOF;

$response->setContent($html);
return $response;
    }
}
