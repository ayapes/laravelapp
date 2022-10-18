@extends('layouts.marketapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','たぬき商店商品一覧表')
@section('menu01','登録データ削除')
@section('content')
<form action="/market/del" method="post">
@csrf
<input type="hidden" name="id" value="{{$form->id}}">
<p>商品名：{{$form->name}}</p>
<p>価格：{{$form->price}}円</p>
<p>カテゴリ：{{$form->category}}</p>
<p>この商品を削除しますか？</p>
<input type="submit" value=" O K ">
</form>
@endsection
@section('footer')
copyright 2022 tanuki.
@endsection