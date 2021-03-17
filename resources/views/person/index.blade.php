@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  @foreach($items as $item)
  <p>ID：{{$item->id}}</p>
  <p>名前は、{{$item->name}}</p>
  <p>メールは、{{$item->mail}}</p>
  <p>年齢は、{{$item->age}}歳</p>

  @endforeach
@endsection

<a href="/person/add">追加</a>

@section('footer')
copyright 2021 hanaomoto.
@endsection