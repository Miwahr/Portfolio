@extends('layouts.master')

@section('title')
 <title>letters results</title>
@endsection

@section('scripts')
 	<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
 	<script type="text/javascript" src="/js/letters_results.js"></script>
@endsection 
 
@section('main')
<h1>Top 10</h1>
<table class="table table-hover">
  <thead class="table-dark">
    <tr>
    <th>Place</th>
      <th>Points</th>
      <th>Name</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
@foreach($results as $result)

    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$result->count}}</td>
      <td>{{$result->name}}</td>
      <td>{{$result->date}}</td>
    </tr>
@endforeach
  </tbody>
</table>
<form class = "input-group" method="get" action="{{route('catch_me')}}">
    <button class="btn btn-info" name="submit">Go again</button>
</form>
@endsection