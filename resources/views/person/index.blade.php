@extends('layouts.personapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Person.index')

@section('menubar')
@parent
インデックスページ
@endsection
@section('form')
@if(count($errors) > 0)
<div class="validate">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="/person/create" method="post">
  @csrf
  <p> name:
    <input type="text" name="name" value="{{old('name')}}">
  </p>
  <p>mail:
    <input type="text" name="mail" value="{{old('mail')}}">
  </p>
  <p> age:
    <input type="number" name="age" value="{{old('age')}}">
  </p>
  <p> <input type="submit" value="新規登録"></p>
</form>
@endsection
@section('content')
<div class="database">
  <p class="title box"><span>ID</span></p>
  <p class="title box"><span>Name</span></p>
  <p class="title box"><span>Mail</span></p>
  <p class="title box"><span>Age</span></p>
  @foreach($items as $item)
  <p class="item box"><span>{{$item->id}}</span></p>
  <p class="item box"><span>{{$item->name}}</span></p>
  <p class="item box"><span>{{$item->mail}}</span></p>
  <p class="item box"><span>{{$item->age}}</span></p>
  @endforeach
</div>
<div>
  @foreach($items as $item)
  <p class="data">{{$item->getData()}}</p>
  @endforeach
</div>
@endsection

@section('footer')
copyright 2022 tuyano.
@endsection