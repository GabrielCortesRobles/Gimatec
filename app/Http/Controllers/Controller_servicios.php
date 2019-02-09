<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\servicios;
use Session;

class Controller_servicios extends Controller
{
        //Vista del formulario nuevo servicio
	public function nuevoservicio()
	{
		return view("Servicios.nuevo_servicio");
	}

	//funcion para guardar una nuevo servicio
	public function guardaservicio(Request $request)
	{
		//Validaciones para el formulario de nuevo servicio
		$this->validate($request,[
			'servicio'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
			'descripcion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,0-9]+$/']
		]);

		$servicios = new servicios;
		$servicios->servicio = $request->servicio;
		$servicios->descripcion = $request->descripcion;
		$servicios->save();
		return redirect('nuevoservicio');
	}

}
