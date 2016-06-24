<?php

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'HomeController@index');
Route::get('curso/{slug}', 'CursoController@showCurso');

Route::get('xlog/{slug}', 'ArticulosController@show');
Route::get('xlog', 'ArticulosController@xLog');

Route::get('xlte/{slug}', 'ArticulosController@show');
Route::get('xlte', 'ArticulosController@xLte');

Route::get('xinf/{slug}', 'ArticulosController@show');
Route::get('xinf', 'ArticulosController@xInf');


