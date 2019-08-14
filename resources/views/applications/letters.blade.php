@extends('layouts.master') @section('title')
<title>letters</title>
@endsection('title') @section('scripts')
<link rel="stylesheet" type="text/css" href="/css/letters.css">
<script type="text/javascript" src="/js/letters.js"></script>
@endsection('scripts') @section('main')
<div class="row text-center">
	
	<div class="col-2">
		<form class="form-inline">
			<div class="input-group mb-2 mr-sm-2">
			<input class="btn btn-primary mb-2" type="button" name="btStart"
				value="Start" id="buttStart"></div>
				<div class="input-group mb-2 mr-sm-2">
				 <input class="btn btn-secondary mb-2" type="button" name="btStop" value="Stop" id="buttStop"
				disabled="true"></div>
		</form>
	</div>
	
	<div class="col-2">
		<form class="input-group" method="post"
			action="{{route('letters_result')}}">
			{{ csrf_field() }} <input type="hidden" name="count" value="0"
				id="Send">
			<button class="btn btn-info" name="submit" disabled="true"
				id="buttSend">Send</button>
		</form>
	</div>
	<div class="col-2">
		<form class="input-group" method="get"
			action="{{route('letters_results')}}">
			<button class="btn btn-info" name="submit">Results</button>
		</form>
	</div>
	<div class="col-2">
		<p id='count'>счёт: 0</p>
	</div>
	<div class="col-2">
	<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
  Help
</button>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class='jumbotron text-center'>
      <p>При нажатии кнопки START сверху начинают падать английские буквы. </p>
      <p>Для их уничтожения необходимо нажимать соответствующие клавиши на клавиатуре</p>
      <p>При правильном нажатии счёт увеличивается на единицу и буква пропадает</p>
      <p>При неправильном нажатии счёт уменьшается на единицу</p>
      <p>Скорость увеличивается в зависимости от набранных очков</p>
      <p>Если буква дойдет до конца страницы, игра закончена</p>
      </div></div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>

@endsection('main')
