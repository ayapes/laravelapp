@extends('layouts.marketapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','たぬき商店商品一覧表')
@section('menu01','商品登録')
@section('form')
<form action="/market/create" method="post">
    @csrf
<p>商品名：<input type="text" name="name"></p>
<p>価格：<input type="text" name="price"></p>
<p>カテゴリ <a href="/market/cate">新規登録</a>：<select name="category">
    @foreach($cates as $cate)
    <option value={{$cate->cate_name}}>{{$cate->cate_name}}</option>
@endforeach
    </select></p>
<p><input type="submit" value="登録"></p></form>
@endsection
@section('menu02','登録商品')
@section('content')
<div class="item_top">
<p><span>商品名</span></p>
<p><span>価格</span></p>
<p><span>カテゴリ</span></p>
<p><span>修正</span></p>
<p><span>削除</span></p>
</div>
@foreach($items as $item)
<div class="item">
    <p><span>{{$item->name}}</span></p>
    <p><span>{{$item->price}}円</span></p>
    <p><span>{{$item->category}}</span></p>
    <p><span><a href="/market/edit?id={{$item->id}}">修正</a></span></p>
    <p><span><a href="/market/del?id={{$item->id}}">削除</a></span></p>
    </div>
@endforeach

@endsection

@section('footer')
copyright 2022 tanuki.
@endsection

