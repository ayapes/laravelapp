@extends('layouts.helloapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','show')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')
@foreach($items as $item)
<div>
  <p>ID：<span>{{$item->id}}</span></p>
  <p>Name：<span>{{$item->name}}</span></p>
  <p>E-mail：<span>{{$item->mail}}</span></p>
  <p>Age：<span>{{$item->age}}</span></p>

</div>
@endforeach


@endsection


@section('footer')
<a href="/list517">詳細ページへ戻る</a>
<a href="/list517/show?page=1">次のページ</a>
copyright 2022 tuyano.
@endsection