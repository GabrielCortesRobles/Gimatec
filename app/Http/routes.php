<?php
//Ruta principal del proyecto, es la primera vista que el usuario vera al logearse
Route::get('/', 'Controller_inicio@home')->name('/');
/*---------------------------------Inician las rutas de maquinas "zona de GABO"---------------------------------*/
//Ruta para la vista " alta maquina"
Route::get('nuevamaquina', 'Controller_maquinas@nuevamaquina')->name('nuevamaquina');
//Ruta para guardar una nueva maquina
Route::POST('guardarmaquina', 'Controller_maquinas@guardarmaquina')->name('guardarmaquina');
//Ruta para la vista del reporte de las maquinas
Route::get('reportemaquina', 'Controller_maquinas@reportemaquina')->name('reportemaquina');
//Ruta para la vista editar maquina
Route::get('editamaquina', 'Controller_maquinas@editamaquina')->name('editamaquina');
//Ruta para actualizar los datos de una maquina
Route::get('actualizamaquina', 'Controller_maquinas@actualizamaquina')->name('actualizamaquina');
//Ruta para eliminar logicamente los datos de una maquina
Route::POST('desactivamaquina/{idm}', 'Controller_maquinas@desactivamaquina')->name('desactivamaquina');
//Ruta para restaurar la baja logica los datos de una maquina
Route::POST('restauramaquina/{idm}', 'Controller_maquinas@restauramaquina')->name('restauramaquina');
//Ruta para eliminar fisicamente los registros de una maquina
Route::get('eliminamaquina/{idm}', 'Controller_maquinas@eliminamaquina')->name('eliminamaquina');




















/*---------------------------------Terminan las rutas de maquinas---------------------------------*/
/*---------------------------------Inician las rutas de empleado "zona de MARY"---------------------------------*/
//Ruta para la vista " alta maquina"
Route::get('nuevo_empleado', 'Controller_empleados@nuevo_empleado')->name('nuevo_empleado');
//Ruta para guardar una nueva maquina
Route::POST('guardaempleado', 'Controller_empleados@guardaempleado')->name('guardaempleado');
//Ruta para la vista del reporte de las maquinas
Route::get('reporteempleado', 'Controller_empleados@reporteempleado')->name('reporteempleado');
//Ruta para la vista editar maquina
Route::get('editaempleado', 'Controller_empleados@editaempleado')->name('editaempleado');
//Ruta para actualizar los datos de una maquina
Route::get('actualizamaquina', 'Controller_empleados@actualizaempleado')->name('actualizaempleado');
//Ruta para eliminar logicamente los datos de una maquina
Route::POST('desactivaempleado/{ide}', 'Controller_empleados@desactivaempleado')->name('desactivaempleado');
//Ruta para restaurar la baja logica los datos de una maquina
Route::POST('restauraempleado/{ide}', 'Controller_empleados@restauraempleado')->name('restauraempleado');
//Ruta para eliminar fisicamente los registros de una maquina
Route::get('eliminaempleado/{ide}', 'Controller_empleados@eliminaempleado')->name('eliminaempleado');
/*-------------------------------------Inician rutas de servicios-----------------------------------------*/
//Ruta para la vista " alta servicios
Route::get('nuevoservicio', 'Controller_servicios@nuevoservicio')->name('nuevoservicio');
//Ruta para guardar una nuevo servicio
Route::POST('guardaservicio', 'Controller_servicios@guardaservicio')->name('guardaservicio');
//Ruta para la vista del reporte de los servicios
Route::get('reporteservicio', 'Controller_servicios@reporteservicio')->name('reporteservicio');
//Ruta para la vista editar servicios
Route::get('editaservicio', 'Controller_servicios@editaservicio')->name('editaservicio');
//Ruta para actualizar los datos de servicios
Route::get('actualizaservicio', 'Controller_servicios@actualizaservicio')->name('actualizaservicio');
//Ruta para eliminar logicamente los datos de servicios
Route::POST('desactivaservicio/{ids}', 'Controller_servicios@desactivaservicio')->name('desactivaservicio');
//Ruta para restaurar la baja logica los datos de los servicios
Route::POST('restauraservicio/{ids}', 'Controller_servicios@restauraservicio')->name('restauraservicio');
//Ruta para eliminar fisicamente los registros de los servicios
Route::get('eliminaservicio/{ids}', 'Controller_servicios@eliminaservicio')->name('eliminaservicio');






























/*---------------------------------Se terminan las rutas de MARY---------------------------------*/
/*---------------------------------Inician las rutas de Prospectos zona de CHUY---------------------------------*/