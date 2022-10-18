@extends('layouts.helloapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Person.find')

@section('menubar')
@parent
検索ペーージ
@endsection

@section('content')
<form action="/person/find" method="post">
    @csrf
<input type="text" name="input" value="{{$input}}">
<input type="submit" value="SEARCH">
</form>
@if(isset($item))
<div class="database">
  <p class="title box"><span>ID</span></p>
  <p class="title box"><span>Name</span></p>
  <p class="title box"><span>Mail</span></p>
  <p class="title box"><span>Age</span></p>
  <p class="item box"><span>{{$item->id}}</span></p>
  <p class="item box"><span>{{$item->name}}</span></p>
  <p class="item box"><span>{{$item->mail}}</span></p>
  <p class="item box"><span>{{$item->age}}</span></p>

</div>
<div>
   <p>{{$item->getData()}}</p>
</div>
@else
<p class="caution">お探しの情報はありません</p>
@endif
@endsection

