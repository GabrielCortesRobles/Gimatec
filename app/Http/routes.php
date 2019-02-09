<?php
//Ruta principal del proyecto, es la primera vista que el usuario vera al logearse
Route::get('/', 'Controller_inicio@home')->name('/');
//Ruta para la vista " alta maquina"
Route::get('nuevamaquina', 'Controller_maquinas@nuevamaquina')->name('nuevamaquina');
//Ruta para guardar una nueva maquina
Route::POST('guardarmaquina', 'Controller_maquinas@guardarmaquina')->name('guardarmaquina');
//Ruta para la vista " alta maquina"
Route::get('nuevo_empleado', 'Controller_empleados@nuevo_empleado')->name('nuevo_empleado');
//Ruta para guardar una nueva maquina
Route::POST('guardarmaquina', 'Controller_empleados@guardaempleado')->name('guardarmaquina');

//Ruta para la vista " alta maquina"
Route::get('nuevoservicio', 'Controller_servicios@nuevoservicio')->name('nuevoservicio');
//Ruta para guardar una nueva maquina
Route::POST('guardaservicio', 'Controller_servicios@guardaservicio')->name('guardaservicio');