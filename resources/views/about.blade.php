@extends('layouts.master') @section('title')
<title>Обо мне</title>
@endsection @section('main')
<h1>Кривуля Михаил Андреевич</h1>
<ul>
	<li>Возраст: 30 лет</li>
	<li>Проживание: Краснодар, ФМР</li>
	<li><a href="{{ route('education') }}">Образование: высшее</a></li>
	<li>Контакты:
		<ul>
			<li>Телефон: +7-938-473-53-70</li>
			<li>e-mail: miwahr@mail.ru</li>
		</ul>
	</li>
	<li>Опыт работы:
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Дата</th>
					<th>Место</th>
					<th>Должность</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>2014-2015</td>
					<td>МКОУ СОШ №8 г. Бакала</td>
					<td>учитель информатики</td>
				</tr>
				<tr>
					<td>2016-2018</td>

					<td>МАОУ СОШ №12 г. Бакала</td>
					<td>учитель информатики</td>
				</tr>
				<tr>
					<td>2018-2019</td>
					<td>Академия ИМСИТ (г. Краснодар)</td>
					<td>преподаватель (Информатика)</td>
				</tr>
			</tbody>
		</table>

	</li>
	<li>Желаемая должность: программист PHP</li>
	<li>Знания и навыки:
		<ul>
			<li>программирование: PHP, Python, немного JS (включая JQuery);</li>
			<li>Фреймворки: Laravel (PHP), Django(Python);</li>
			<li>Система контроля версий Git;</li>
			<li>База данных MySQL, PostgreSQL;</li>
			<li>Основы HTML/CSS</li>
			<li>Ajax</li>
		</ul>
	</li>
	<li><b>Некоторые практические навыки представлены в разделе <a
			href="{{route('applications') }}">Приложения</a>
	</b></li>
</ul>
@endsection
