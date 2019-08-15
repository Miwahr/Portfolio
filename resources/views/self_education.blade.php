@extends('layouts.master')

@section('title')
<title>Самообразование</title>
@endsection

@section('main')
<h1>Самообразование</h1>

<details>
	<summary class="h3">Книги</summary>
	<table class="table table-striped">
		<thead class="table-primary">
			<tr>
				<th>Изображение</th>
				<th>Название</th>
				<th>Авторы</th>
				<th>Описание</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><img class="rounded mx-auto d-block"
					src="/img/php7_v_podlinnike.jpg" height="200"
					alt="PHP 7 в подлиннике"></td>
				<td>PHP 7 в подлиннике (2018 г.)</td>
				<td>Дмитрий Котеров<br> Игорь Симдянов
				</td>
				<td><ul>
						<li>Принципы работы интернета</li>
						<li>Основы языка PHP</li>
						<li>Функции PHP</li>
						<li>Основы регулярных выражений</li>
						<li>Основы ООП</li>
						<li>Сессии и cookie</li>
						<li>Работа с MySQL</li>
						<li>стандарты PSR</li>
						<li>MVC</li>
						<li>Git</li>
						<li>Ajax</li>
					</ul></td>
			</tr>
			<tr>
				<td><img class="rounded mx-auto d-block"
					src="/img/PHP_MySQL_JS_HTML.jpg" height="200"
					alt="Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5"></td>
				<td>Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript,
					CSS и HTML5 (2016 г.)</td>
				<td>Робин Никсон</td>
				<td><ul>
						<li>Основы языка PHP</li>
						<li>Функции PHP</li>
						<li>Работа с MySQL</li>
						<li>Основы JavaScript</li>
						<li>Ajax</li>
						<li>Основы HTML и CSS</li>
					</ul></td>
			</tr>
			<tr>
				<td><img class="rounded mx-auto d-block"
					src="/img/JS_and_jQuery.jpg" height="200"
					alt="JavaScript и jQuery, исчерпывающее руководство"></td>
				<td>JavaScript и jQuery, исчерпывающее руководство (2017 г.)</td>
				<td>Дэвид МакФарланд</td>
				<td><ul>
						<li>Основы JavaScript</li>
						<li>Основы jQuery</li>
						<li>События jQuery</li>
						<li>Анимация и эффекты</li>
						<li>jQuery UI</li>
						<li>Ajax</li>
					</ul></td>
			</tr>
			<tr>
				<td><img class="rounded mx-auto d-block" src="/img/Ubuntu_Linux.jpg"
					height="200" alt="Ubuntu Linux с нуля"></td>
				<td>Ubuntu Linux с нуля (2019 г.)</td>
				<td>Сергей Волох</td>
				<td><ul>
						<li>Установка и настройка</li>
						<li>Командная строка</li>
						<li>Установка драйверов</li>
						<li>Поиск и устранение неисправностей сети</li>
						<li>Группы пользователей и права доступа</li>
						<li>Команды Терминала</li>
						<li>Управление процессами</li>
					</ul></td>
			</tr>
			<tr>
				<td><img class="rounded mx-auto d-block" src="/img/HTML_CSS.jpg"
					height="200" alt="Изучаем HTML, XHTML и CSS"></td>
				<td>Изучаем HTML, XHTML и CSS (2014 г.)</td>
				<td>Элизабет Робсон<br>Эрик Фримен
				</td>
				<td><ul>
						<li>Основы HTML</li>
						<li>Конструирование веб-страниц</li>
						<li>Основы CSS</li>
						<li>Разметка и позиционирование</li>
						<li>HTML5</li>
					</ul></td>
			</tr>
			<tr>
				<td><img class="rounded mx-auto d-block" src="/img/Algoritms.jpg"
					height="200" alt="Грокаем алгоритмы"></td>
				<td>Грокаем алгоритмы (2019 г.)</td>
				<td>Адитья Бхаргава</td>
				<td><ul>
						<li>Знакомство с алгоритмами</li>
						<li>Сортировка выбором</li>
						<li>Рекурсия</li>
						<li>Быстрая сортировка</li>
						<li>Хеш-таблицы</li>
						<li>Поиск в ширину</li>
						<li>Алгоритм Дейкстры</li>
						<li>Жадные алгоритмы</li>
						<li>Динамическое программирование</li>
					</ul></td>
			</tr>
			<tr>
				<td><img class="rounded mx-auto d-block" src="/img/PostgreSQL.jpg"
					height="200" alt="PostgreSQL. Основы языка SQL"></td>
				<td>PostgreSQL. Основы языка SQL (2019 г.)</td>
				<td>Е. П. Моргунов</td>
				<td><ul>
						<li>Введение в SQL</li>
						<li>Типы данных СУБД PostgreSQL</li>
						<li>Запросы</li>
						<li>Изменение данных</li>
						<li>Связи</li>
						<li>Индексы</li>
					</ul></td>
			</tr>
		</tbody>
	</table>
</details>
<details>
	<summary class="h3">Курсы</summary>
	<p class="h5">
		<a href="https://www.sololearn.com/Profile/11941315">SoloLearn:</a>
	</p>
	<ul class="list-group list-group-horizontal">
		<li class="list-group-item">PHP</li>
		<li class="list-group-item">JS</li>
		<li class="list-group-item">SQL</li>
		<li class="list-group-item">HTML</li>
		<li class="list-group-item">CSS</li>
		<li class="list-group-item">Python</li>
	</ul>

	<p class="h5">
		<a href="https://stepik.org/users/36597017">Stepik:</a>
	</p>
	<ul class="list-group list-group-horizontal">
		<li class="list-group-item">Программирование на Python</li>
		<li class="list-group-item">Python: Основы и применение</li>
		<li class="list-group-item">JavaScript для начинающих</li>
	</ul>
</details>
<details>
	<summary class="h3">Активное использование</summary>
	<div class="list-group w-25 text-center">
		<a class="list-group-item list-group-item-action list-group-item-info"
			href="https://www.php.net">php.net</a> <a
			class="list-group-item list-group-item-action list-group-item-info"
			href="https://laravel.ru">laravel.ru </a> <a
			class="list-group-item list-group-item-action list-group-item-info"
			href="https://laravel.com">laravel.com </a> <a
			class="list-group-item list-group-item-action list-group-item-info"
			href="https://learn.javascript.ru">learn.javascript.ru </a> <a
			class="list-group-item list-group-item-action list-group-item-info"
			href="https://stackoverflow.com">stackoverflow.com</a>
	</div>
</details>
@endsection
