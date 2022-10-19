@extends('layouts.personapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Person.Edit')

@section('menubar')
@parent
編集ページ
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
<form action="/person/edit" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$form->id}}">
  <p> name:
    <input type="text" name="name" value="{{$form->name}}">
  </p>
  <p>mail:
    <input type="text" name="mail" value="{{$form->mail}}">
  </p>
  <p> age:
    <input type="number" name="age" value="{{$form->age}}">
  </p>
  <p> <input type="submit" value="更新"></p>
</form>
@endsection

@section('footer')
copyright 2022 tuyano.
@endsection