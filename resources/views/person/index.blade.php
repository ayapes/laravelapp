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
  <div class="title">
  <p class="box"></p>
  <p class="box"><span>ID</span></p>
  <p class="box"><span>Name</span></p>
  <p class="box"><span>Mail</span></p>
  <p class="box"><span>Age</span></p>
</div>
  @foreach($items as $item)
  <div class="item">
  <p class="item box"><span><a href="/person/edit?id={{$item->id}}">修正</a></span></p>
  <p class="box"><span>{{$item->id}}</span></p>
  <p class="box"><span>{{$item->name}}</span></p>
  <p class="box"><span>{{$item->mail}}</span></p>
  <p class="box"><span>{{$item->age}}</span></p>
  </div>
  
  @if($item->boards != null)
  @foreach($item->boards as $obj)
  <p class="bbs">
    {{$obj->getData()}}
    </p>
    @endforeach
    @endif
    
  @endforeach
</div>
<div>
  @foreach($items as $item)
  <p class="data">{{$item->getData()}}</p>
  <p>@if($item->board != null)
    {{$item->board->getData()}}
    @endif</p>
  @endforeach
</div>
@endsection

@section('footer')
copyright 2022 tuyano.
@endsection