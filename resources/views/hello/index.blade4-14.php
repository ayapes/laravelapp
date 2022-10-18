@extends('layouts.helloapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Validation')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>{{$msg}}</p>
@if (count($errors) > 0)
<p class="error">入力に問題があります。再入力してください</p>
@endif
<form action="/list414" method="post">
    @csrf
    @error('name')
    <div class="error">
        <p>{{$message}}</p>
        @enderror
    <p> name: 
        <input type="text" name="name" value="{{old('name')}}"></p>
  @error('name')
    </div>
  @enderror

  @error('mail')
  <div class="error">
      <p>{{$message}}</p>
      @enderror
       <p>mail: 
        <input type="text" name="mail" value="{{old('email')}}">
  </p> 
  @error('mail')
    </div>
  @enderror
  @error('age')
  <div class="error">
      <p>{{$message}}</p>
      @enderror
       <p> age: 
        <input type="text" name="age" value="{{old('age')}}"></p>
        @error('age')
    </div>
  @enderror
        <p> <input type="submit" value="SEND"></p>
       
    </form>

@endsection

@section('footer')
copyright 2022 tuyano.
@endsection