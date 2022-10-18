@extends('layouts.marketapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','たぬき商店商品一覧表')
@section('menu01','商品データ編集')

@section('content')

<form action="/market/edit" method="post">
@csrf
<input type="hidden" name="id" value="{{$form->id}}">
<p> 商品名: 
<input type="text" name="name" value="{{$form->name}}"></p>
<p>価格: 
<input type="text" name="price" value="{{$form->price}}"></p> 
<p> 現在のカテゴリ: {{$form->category}}</p>
<p>新しいカテゴリ <a href="/market/cate">新規登録</a>：<select name="category">
    @foreach($cates as $cate)
    <option value="{{$cate->cate_name}}">{{$cate->cate_name}}</option>
@endforeach
    </select></p>
    <p> <input type="submit" value="登録"></p>
</form>
@endsection

@section('footer')
copyright 2022 tanuki.
@endsection