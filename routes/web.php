<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// ↑　aaa.blade.php には　'aaa' でアクセスできるというきまりになってる。

Route::get('hell',function (){
    return '<html><body><h1>Hello!</h1><p>This is a sample page.</p></body></html>';
});

$html = <<<EOF
<html>
<head>
<title>HELLO</title>
<style>
body{
    font-size:16px;
    color:#999;
}
h1{
    font-size:100pt;
    text-align:right;
    color: #dee;
    margin:-40px 0px -50px 0px;
}
</style>
</head>
<body>
<h1>Hello</h1>
<p>This is samaple page.</p>
<p>これはサンプルで作ったページです</p>
</body>
</html>

EOF;

;

Route::get('hello2',function () use ($html){
    return $html;
});



Route::get('hello3/{msg}',function ( $msg ){

$html2 = <<<EOF
<html>
<head>
<title>HELLO - {$msg}page</title>
<style>
body{
    font-size:16px;
    color:#999;
}
h1{
    font-size:100pt;
    text-align:right;
    color: #dee;
    margin:-40px 0px -50px 0px;
}
</style>
</head>
<body>
<h1>Hello</h1>
<p>This is {$msg} page.</p>
<p>これはサンプルで作ったページです</p>
</body>
</html>

EOF;
return $html2;
});

// コントローラーを使ってみた↓

// Route::get('hello','HelloController@index');

// p45 リスト2-10↓

// Route::get('hello5/{id?}/{pass?}','Hello5Controller@index');

// P49 シングルアクションコントローラ

Route::get('hello5','Hello5Controller');

Route::get('list215','List215Controller@index');


// ↓コントローラ無視で呼び出す方法
// Route::get('list301',function(){
//     return view('hello.index');
// });

// コントローラ使ってバケツリレー
Route::get('list301','List301Controller@index');

// P62　値をテンプレートに渡す
Route::get('list306','List301Controller@msg');

//  P64 ルートパラメータをテンプレートに渡す
Route::get('list309/{id?}','List301Controller@id');

// P66 クエリー文字の利用
Route::get('list310','List310Controller@index');

//  P69 Bladeテンプレートを使う
Route::get('list312','List312Controller@index');

// P72 POSTのルート設定
Route::post('list312','List312Controller@post');

// P88 継承レイアウトの作成
Route::get('hello10', function () {
    return view('hello.index');
});

// P122バリデーションを利用する
Route::get('list414','List414Controller@index');
Route::post('list414','List414Controller@post');

// P140 フォームコントローラーでバリデーション
Route::get('list421','List421Controller@index');
Route::post('list421','List421Controller@post');

// P192データベースの利用
Route::get('list504','List504Controller@index');

// P196DB::insertによるレコード作成
Route::get('list504/add','List504Controller@add');
Route::post('list504/add','List504Controller@create');

// P200 DB::updateによる更新
Route::get('list512','List512Controller@index');
Route::get('list512/edit','List512Controller@edit');
Route::post('list512/edit','List512Controller@update');

// P205 DB::tableとget クエリビルダ
Route::get('list517','List517Controller@index');
Route::get('list517/edit','List517Controller@edit');
Route::post('list517/edit','List517Controller@update');
Route::get('list517/show','List517Controller@show');


Route::get('market','MarketController@index');
Route::post('market/create','MarketController@create');
Route::get('market/edit','MarketController@edit');
Route::post('market/edit','MarketController@update');
Route::get('market/del','MarketController@del');
Route::post('market/del','MarketController@remove');
Route::get('market/cate','MarketController@cate');
Route::post('market/cate','MarketController@cate_edit');
Route::get('market/test','MarketController@test');


Route::get('person','PersonController@index');
Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');
Route::post('person/create','PersonController@create');
Route::get('person/edit','PersonController@edit');
Route::post('person/edit','PersonController@update');

Route::get('board','BoardController@index');
Route::get('create','BoardController@create');
