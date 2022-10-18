@extends('layouts.helloapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです</p>
<p>必要なだけ記述ができます</p>

@component('components.message')
@slot('msg_title')
CAUTION!
@endslot

@slot('msg_content')
これはメッセージの表示です
@endslot
@endcomponent

@endsection

@section('footer')
copyright 2022 tuyano.
@endsection