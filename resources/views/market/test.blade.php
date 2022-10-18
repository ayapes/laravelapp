@extends('layouts.marketapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','たぬき商店商品一覧表')
@section('menu01','カテゴリごとの商品一覧テスト')
@section('content')

@foreach($cates as $cate)
<p class="box02">{{$cate->id}}：{{$cate->cate_name}}</p>
@foreach($items as $item)
<p>{{$item->name}}</p>
@endforeach
@endforeach

{{-- @foreach($names as $name)
{{$name}}
@endforeach --}}

{{$names}}
@endsection