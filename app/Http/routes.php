<?php
//Ruta principal del proyecto, es la primera vista que el usuario vera al logearse
Route::get('/', 'Controller_inicio@home')->name('/');
//Ruta para la vista " alta maquina"
Route::get('nuevamaquina', 'Controller_maquina@nuevamaquina')->name('nuevamaquina');