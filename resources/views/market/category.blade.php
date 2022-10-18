@extends('layouts.marketapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','たぬき商店商品一覧表')
@section('menu01','カテゴリ登録ページ')

@section('form')
<p>登録済のカテゴリ一覧を見てかぶってないか確認してね！</p>
<form action="/market/cate" method="post">
@csrf
<p><input type="text" name="cate_name"></p>
<p><input type="submit" value="登録"></p>
</form>
@endsection

@section('content')
<div class="categoryname">
    @foreach($cates as $cate)
<p>{{$cate -> cate_name}}</p>
@endforeach
</div>
@endsection

@section('link')
<p>{{$prevurl}}</p>
<a href="/market">トップページに戻る</a>
@endsection