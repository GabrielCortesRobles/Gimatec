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
Route::POST('guardarmaquina', 'Controller_empleados@guardaempleado')->name('guardarmaquina');
//Ruta para la vista " alta maquina"
Route::get('nuevoservicio', 'Controller_servicios@nuevoservicio')->name('nuevoservicio');
//Ruta para guardar una nueva maquina
Route::POST('guardaservicio', 'Controller_servicios@guardaservicio')->name('guardaservicio');





























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
