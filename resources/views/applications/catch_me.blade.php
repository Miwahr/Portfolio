@extends('layouts.master') @section('title')
<title>Catch_me</title>
@endsection @section('scripts')
<link type="text/css" rel="stylesheet" href="/css/catch_me.css" />
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/catch.js"></script>
@endsection @section('main')



<div id="catch">Поймай меня</div>

<div class="row text-center">
	<div class="col-2">
		<form class="input-group">
			<input class="btn btn-primary" type="button" name="btStart"
				value="Start" id="buttStart">
		</form>
	</div>
	<div class="col-2">
		<form class="input-group" method="post"
			action="{{route('catch_me_send_result')}}">
			{{ csrf_field() }} <input type="hidden" name="count" value="0"
				id="send">
			<button class="btn btn-info" id="buttSend" name="submit"
				disabled="true">Send result</button>
		</form>
	</div>
	<div class="col-2">
		<form class="input-group" method="get"
			action="{{route('catch_me_results')}}">
			<button class="btn btn-info" name="submit">Show results</button>
		</form>
	</div>
	<div class="col-2">
		<p id="count">счёт:</p>
	</div>
	<div class="col-2">
		<p id="timer">время: 30 сек</p>
	</div>
	<div class="col-2">
		<button class="btn btn-primary" data-toggle="modal"
			data-target=".bd-example-modal-lg">Help</button>
	</div>
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
		aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class='jumbotron text-center'>
					<p>При нажатии кнопки START появляется небольшой блок, на который вам нужно кликать мышью.</p>
					<p>При наведении мыши на этот блок он телепортируется в другое место через очень маленький промежуток времени</p>
					<p>Вам необходтмо успеть за этот промежуток кликнуть по нему</p>
					<p>На игру дается 30 секунд</p>
					</div>
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

</div>
@endsection
