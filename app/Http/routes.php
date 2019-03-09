<?php
Route::get('/', 'Controller_inicio@login')->name('/');

//Ruta principal del proyecto, es la primera vista que el usuario vera al logearse
Route::get('/', 'Controller_inicio@home')->name('/');
Route::get('mostrar', 'Controller_maquinas@mostrar')->name('mostrar');
/*---------------------------------Inician las rutas de maquinas "zona de GABO"---------------------------------*/
//Ruta para la vista " alta maquina"
Route::get('nuevamaquina', 'Controller_maquinas@nuevamaquina')->name('nuevamaquina');
//Ruta para guardar una nueva maquina
Route::POST('guardarmaquina', 'Controller_maquinas@guardarmaquina')->name('guardarmaquina');
//Ruta para la vista del reporte de las maquinas
Route::get('reportemaquina', 'Controller_maquinas@reportemaquina')->name('reportemaquina');
//Ruta para la vista editar maquina
Route::get('editamaquina/{idm}', 'Controller_maquinas@editamaquina')->name('editamaquina');
//Ruta para actualizar los datos de una maquina
Route::POST('actualizamaquina', 'Controller_maquinas@actualizamaquina')->name('actualizamaquina');
//Ruta para eliminar logicamente los datos de una maquina
Route::POST('desactivamaquina/{idm}', 'Controller_maquinas@desactivamaquina')->name('desactivamaquina');
//Ruta para restaurar la baja logica los datos de una maquina
Route::POST('restauramaquina/{idm}', 'Controller_maquinas@restauramaquina')->name('restauramaquina');
//Ruta para eliminar fisicamente los registros de una maquina
Route::POST('eliminamaquina/{idm}', 'Controller_maquinas@eliminamaquina')->name('eliminamaquina');




















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
//Ruta para la vista " alta servicios
Route::get('nuevoservicio', 'Controller_servicios@nuevoservicio')->name('nuevoservicio');
//Ruta para guardar una nuevo servicio
Route::POST('guardaservicio', 'Controller_servicios@guardaservicio')->name('guardaservicio');
//Ruta para la vista del reporte de los servicios
Route::get('reporteservicio', 'Controller_servicios@reporteservicio')->name('reporteservicio');
//Ruta para la vista editar servicios
Route::get('editaservicio/{ids}', 'Controller_servicios@editaservicio')->name('editaservicio');
//Ruta para actualizar los datos de servicios
Route::POST('actualizaservicio', 'Controller_servicios@actualizaservicio')->name('actualizaservicio');
//Ruta para eliminar logicamente los datos de servicios
Route::POST('desactivaservicio/{ids}', 'Controller_servicios@desactivaservicio')->name('desactivaservicio');
//Ruta para restaurar la baja logica los datos de los servicios
Route::POST('restauraservicio/{ids}', 'Controller_servicios@restauraservicio')->name('restauraservicio');
//Ruta para eliminar fisicamente los registros de los servicios
Route::POST('eliminaservicio/{ids}', 'Controller_servicios@eliminaservicio')->name('eliminaservicio');






























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




//Ruta para la vista " alta Categoria"
Route::get('nuevacategoria', 'Controller_categorias@nuevacategoria')->name('nuevacategoria');
//Ruta para guardar una nueva maquina
Route::POST('guardarcategoria', 'Controller_categorias@guardarcategoria')->name('guardarcategoria');
//Ruta para la vista del reporte de las maquinas
Route::get('reportecategoria', 'Controller_categorias@reportecategoria')->name('reportecategoria');
//Ruta para la vista editar maquina
Route::get('editacategoria/{idc}', 'Controller_categorias@editacategoria')->name('editacategoria');
//Ruta para actualizar los datos de una maquina
Route::POST('actualizacategoria', 'Controller_categorias@actualizacategoria')->name('actualizacategoria');
//Ruta para eliminar logicamente los datos de una maquina
Route::POST('desactivacategoria/{idc}', 'Controller_categorias@desactivacategoria')->name('desactivacategoria');
//Ruta para restaurar la baja logica los datos de una maquina
Route::POST('restauracategoria/{idc}', 'Controller_categorias@restauracategoria')->name('restauracategoria');
//Ruta para eliminar fisicamente los registros de una maquina
Route::POST('eliminacategoria/{idc}', 'Controller_categorias@eliminacategoria')->name('eliminacategoria');
