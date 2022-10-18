@extends('layouts.helloapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Add')
@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')

<form action="/list504/add" method="post">
@csrf
<p> name: 
<input type="text" name="name"></p>
<p>mail: 
<input type="text" name="mail"></p> 
<p> age: 
<input type="text" name="age"></p>
<p> <input type="submit" value="SEND"></p>
</form>


<div class="database">
  <p class="title box"><span>Name</span></p>
  <p class="title box"><span>Mail</span></p>
  <p class="title box"><span>Age</span></p>
  @foreach($items as $item)
  <p class="item box"><span>{{$item->name}}</span></p>
  <p class="item box"><span>{{$item->mail}}</span></p>
  <p class="item box"><span>{{$item->age}}</span></p>
  @endforeach
</div>
@endsection