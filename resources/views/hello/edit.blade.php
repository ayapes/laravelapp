@extends('layouts.helloapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Edit')
@section('menubar')
@parent
更新ページ
@endsection

@section('content')

<form action="/list512/edit" method="post">
@csrf
<input type="hidden" name="id" value="{{$form->id}}">
<p> name: 
<input type="text" name="name" value="{{$form->name}}"></p>
<p>mail: 
<input type="text" name="mail" value="{{$form->mail}}"></p> 
<p> age: 
<input type="text" name="age" value="{{$form->age}}"></p>
<p> <input type="submit" value="SEND"></p>
</form>
@endsection
