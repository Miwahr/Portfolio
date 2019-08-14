@extends('layouts.master')

@section('title')
 <title>Приложения</title>
 @endsection('title')
 
@section('main')
<h1>Здравствуйте, {{Session::get('name')}}!</h1>
<h3>Список приложений:</h3>
<div class="list-group text-center w-25">
  <a href="{{route('letters')}}" class="list-group-item list-group-item-action list-group-item-info">Буквы</a>
  <a href="{{route('catch_me')}}" class="list-group-item list-group-item-action list-group-item-info">Поймай меня!</a>
  <a href="#!" class="list-group-item list-group-item-action list-group-item-info">В разработке</a>
</div>
@include('layouts.errors')
@endsection('main')