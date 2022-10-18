@extends('layouts.helloapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','database')

@section('menubar')
@parent
一覧ページ
@endsection

@section('content')
<div class="database">
  <p class="title box"><span></span></p>
  <p class="title box"><span>Name</span></p>
  <p class="title box"><span>Mail</span></p>
  <p class="title box"><span>Age</span></p>
  @foreach($items as $item)
  <p class="item box"><span><a href="/list517/edit?id={{$item->id}}">修正</a></span></p>
  <p class="item box"><span><a href="/list517/show?id={{$item->id}}">{{$item->name}}</a></span></p>
  <p class="item box"><span>{{$item->mail}}</span></p>
  <p class="item box"><span>{{$item->age}}</span></p>
  @endforeach
</div>
@endsection

@section('footer')
copyright 2022 tuyano.
@endsection