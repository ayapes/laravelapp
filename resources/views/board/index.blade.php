@extends('layouts.personapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Board.index')

@section('menubar')
@parent
けいじばん
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
<form action="/board/create" method="post">
  @csrf
  <p> person id:
    <input type="number" name="person_id">
  </p>
  <p>title:
    <input type="text" name="title">
  </p>
  <p> message:
    <input type="text" name="message">
    {{-- <textarea name="message" cols="30" rows="10"></textarea> --}}
  </p>
  <p> <input type="submit" value="投稿"></p>
</form>
@endsection
@section('content')
<div>
  <p class="data">Data</p>
  @foreach($items as $item)
  <p class="data">{{$item->getData()}}</p>
  @endforeach
</div>
@endsection

@section('footer')
copyright 2022 tuyano.
@endsection