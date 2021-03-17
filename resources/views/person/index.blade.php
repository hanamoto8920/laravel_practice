@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
<table>
    <tr><th>Person</th><th>Board</th></tr>
    @foreach($hasItems as $item)
    <tr>
      <td>{{$item->getData()}}</td>
      <td>
        @if ($item->boards != null)
          <table width="100%">
            @foreach ($item->boards as $obj)
              <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
          </table>
        @endif
      </td>
    @endforeach
    </tr>
</table>
<div style="margin:10px;"></div>
<table>
  <tr><th>Person</th></tr>
    @foreach ($noItems as $item)
    <tr>
      <td>{{$item->getData()}}</td>
    </tr>
    @endforeach
</table>
@endsection

<a href="/person/add">追加</a>

@section('footer')
copyright 2021 hanaomoto.
@endsection