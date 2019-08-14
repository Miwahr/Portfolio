<?php
// главная
Route::get('/', function () {
    return view('welcome');
})->name('home');

// обо мне
Route::get('/about', 'AboutController@about')->name('about');
// образование
Route::get('/education', 'AboutController@education')->name('education');
// самообразование
Route::get('/self_education', 'AboutController@self_education')->name('self_education');


// приложения-ввод имени
Route::get('/applications', 'ApplicationController@welcome')->name('applications');
// проверка имени и вывод списка приложений
Route::get('/applications/check_name/', 'ApplicationController@check_name')->name('check_name');

// приложение letters
Route::get('/applications/letters/', 'ApplicationController@letters')->name('letters');
// сохранение результата в БД
Route::post('/applications/letters_result/', 'ApplicationController@letters_result')->name('letters_result');
// вывод топ 10
Route::get('/applications/letters_results/', 'ApplicationController@letters_results')->name('letters_results');

// приложение catch_me
Route::get('/applications/catch_me/', 'ApplicationController@catch_me')->name('catch_me');
// сохранение результата в БД
Route::post('/applications/catch_me_results/', 'ApplicationController@catch_me_send_result')->name('catch_me_send_result');
// вывод топ 10
Route::get('/applications/catch_me_results/', 'ApplicationController@catch_me_results')->name('catch_me_results');

