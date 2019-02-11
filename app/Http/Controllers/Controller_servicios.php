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

	
    //Funcion para la vista del reporte de las maquinas
	public function reporteservicio()
        {
            $servicios = servicios::withTrashed()
                                    ->orderBy('ids','ASC')
                                    ->paginate();
            return view('Servicios.Reporteservicio', compact('servicios'));
        }

	//Funcion para la eliminacion logica de una maquina
	public function desactivaservicio(Request $request, $ids)
        {
            if($request->ajax())
            {
                $servicio =  servicios::find($ids);
                $servicio->delete();
                $ser_total = servicios::withTrashed()->count();

                return response()->json([
                    'total' => $ser_total,
                    'message' => $servicio->servicio . 'Fue desactivada correctamente'
                ]);
            }
        }

	//Funcion para la restaurar una maquina
	public function restauraservicio(Request $request, $ids)
        {
            if($request->ajax())
            {
                $servicio = servicios::withTrashed('servicio')->where('ids',$ids);
                $servicio->restore();
                $ser_total = servicios::withTrashed()->count();

                return response()->json([
                    'total' => $ser_total,
                    'message' => $servicio->servicio . 'Fue activada correctamente'
                ]);
            }
        }

}
