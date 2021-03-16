@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  @foreach($items as $item)
  <p>{{$item->name}}</p>
  <p>{{$item->mail}}</p>
  <p>{{$item->age}}</p>
  @endforeach

@endsection

@section('footer')
copyright 2021 hanaomoto.
@endsection