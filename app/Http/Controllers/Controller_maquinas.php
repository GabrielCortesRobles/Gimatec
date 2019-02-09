<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\maquinas;
use Session;

class Controller_maquinas extends Controller
{
    //Vista del formulario nueva maquina
	public function nuevamaquina()
	{
		return view("Maquinas.Nueva_maquina");
	}

	//funcion para guardar una nueva maquina
	public function guardarmaquina(Request $request)
	{
		//Validaciones para el formulario de nueva maquina
		$this->validate($request,[
			'nombre_maq'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
			'descripcion_maq'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,0-9]+$/'],
			'existencia'=>'required|numeric',
			'precio'=>'required|numeric',
			'archivo'=>'image|mimes:jpg,jpeg,png,gif'
		]);
			
		$file = $request->file('archivo');
		if($file!="")
		{
		$ldate = date('Ymd_His_');
		$img = $file->getClientOriginalName();
		$img2 = $ldate.$img;
		\Storage::disk('local')->put($img2, \File::get($file));
		}
		else
		{
			$img2 = "default-image.jpg";
		}

		$maquinas = new maquinas;
		$maquinas->nombre_maq = $request->nombre_maq;
		$maquinas->descripcion_maq = $request->descripcion_maq;
		$maquinas->existencia = $request->existencia;
		$maquinas->precio = $request->precio;
		$maquinas->archivo = $img2;
		$maquinas->save();
		return redirect('nuevamaquina');
	}

	//Funcion para la vista del reporte de las maquinas
	public function reportemaquina()
	{
		$maquinas = maquinas::withTrashed()
								->orderBy('idm','ASC')
								->paginate();
		return view('Maquinas.Reportemaquina', compact('maquinas'));
	}

	//Funcion para la eliminacion logica de una maquina
	public function desactivamaquina(Request $request, $idm)
	{
		if($request->ajax())
		{
			$maquina = maquinas::find($idm);
			$maquina->delete();
			$maq_total = maquinas::withTrashed()->count();

			return response()->json([
				'total' => $maq_total,
				'message' => $maquina->nombre_maq . 'Fue desactivada correctamente'
			]);
		}
	}

	//Funcion para la restaurar una maquina
	public function restauramaquina(Request $request, $idm)
	{
		if($request->ajax())
		{
			$maquina = maquinas::withTrashed('nombre_maq')->where('idm',$idm);
			$maquina->restore();
			$maq_total = maquinas::withTrashed()->count();

			return response()->json([
				'total' => $maq_total,
				'message' => $maquina->nombre_maq . 'Fue activada correctamente'
			]);
		}
	}
}
