<?php
//Ruta principal del proyecto, es la primera vista que el usuario vera al logearse
Route::get('/', 'Controller_inicio@home')->name('/');
//Ruta para la vista " alta maquina"
Route::get('nuevamaquina', 'Controller_maquinas@nuevamaquina')->name('nuevamaquina');
//Ruta para guardar una nueva maquina
Route::POST('guardarmaquina', 'Controller_maquinas@guardarmaquina')->name('guardarmaquina');