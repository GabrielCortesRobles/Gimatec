<?php
//Route::get('/', 'Controller_inicio@login')->name('/');

//Ruta principal del proyecto, es la primera vista que el usuario vera al logearse
Route::get('/', 'Controller_inicio@login')->name('/');
Route::POST('/validalogin', 'Controller_empleados@validalogin')->name('validalogin');
Route::get('/home', 'Controller_inicio@home')->name('home');















/*---------------------------------Terminan las rutas de maquinas---------------------------------*/
/*---------------------------------Inician las rutas de empleado "zona de MARY"---------------------------------*/
//Ruta para la vista " alta empleado"
Route::get('nuevo_empleado', 'Controller_empleados@nuevo_empleado')->name('nuevo_empleado');
//Ruta para guardar una nuevo empleado
Route::POST('guardaempleado', 'Controller_empleados@guardaempleado')->name('guardaempleado');
//Ruta para la vista del reporte de los empleado
Route::get('reporteempleado', 'Controller_empleados@reporteempleado')->name('reporteempleado');
//Ruta para la vista edita empleados
Route::get('editaempleado/{ide}', 'Controller_empleados@editaempleado')->name('editaempleado');
//Ruta para actualizar los datos de un empleados
Route::POST('actualizaempleado', 'Controller_empleados@actualizaempleado')->name('actualizaempleado');
//Ruta para eliminar logicamente los datos de un empleado
Route::POST('desactivaempleado/{ide}', 'Controller_empleados@desactivaempleado')->name('desactivaempleado');
//Ruta para restaurar la baja logica los datos de una maquina
Route::POST('restauraempleado/{ide}', 'Controller_empleados@restauraempleado')->name('restauraempleado');
//Ruta para eliminar fisicamente los registros de un empleado
Route::POST('eliminaempleado/{ide}', 'Controller_empleados@eliminaempleado')->name('eliminaempleado');
/*-------------------------------------Inician rutas de servicios-----------------------------------------*/




























/*---------------------------------Se terminan las rutas de MARY---------------------------------*/
/*---------------------------------Inician las rutas de Prospectos zona de CHUY---------------------------------*/
//Ruta para la vista " alta maquina"
Route::get('nuevoprospecto', 'Controller_prospectos@nuevoprospecto')->name('nuevoprospecto');
//Ruta para guardar una nueva maquina
Route::POST('guardarprospecto', 'Controller_prospectos@guardarprospecto')->name('guardarprospecto');
//Ruta para la vista del reporte de las maquinas
Route::get('reporteprospecto', 'Controller_prospectos@reporteprospecto')->name('reporteprospecto');
//Ruta para la vista editar maquina
Route::get('editaprospecto/{idp}', 'Controller_prospectos@editaprospecto')->name('editaprospecto');
//Ruta para actualizar los datos de una maquina
Route::POST('actualizaprospecto', 'Controller_prospectos@actualizaprospecto')->name('actualizaprospecto');
//Ruta para eliminar logicamente los datos de una maquina
Route::POST('desactivaprospecto/{idp}', 'Controller_prospectos@desactivaprospecto')->name('desactivaprospecto');
//Ruta para restaurar la baja logica los datos de una maquina
Route::POST('restauraprospecto/{idp}', 'Controller_prospectos@restauraprospecto')->name('restauraprospecto');
//Ruta para eliminar fisicamente los registros de una maquina
Route::POST('eliminaprospecto/{idp}', 'Controller_prospectos@eliminaprospecto')->name('eliminaprospecto');




