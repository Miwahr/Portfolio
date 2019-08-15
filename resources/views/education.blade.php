@extends('layouts.master')

@section('title')
 <title>Образование</title>
 @endsection('title')
 
@section('main')
<h1>Образование</h1>
<ul  class="list-group">
  <li class="list-group-item"> 2013 г. - ЮУрГУ, инженер по специальности 
  "Производство строительных материалов, изделий и конструкций" с отличием </li>
  <li class="list-group-item"> 2017 г. - ЧИРПО, "Методика преподавания ИКТ и информатики" </li>
  <li class="list-group-item">а также много различных курсов, включая техническое обеспечение ЕГЭ и робототехнику</li>
  <li class="list-group-item">Все, что касается программирования, представлено на странице <a href="{{ route('self_education') }}">Самообразование</a></li>
</ul>
@endsection('main')
