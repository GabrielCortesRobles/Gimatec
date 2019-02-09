<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\municipios;
use App\empleados;
use Session;

class Controller_empleados extends Controller
{
     //Vista del formulario nueva maquina
	public function nuevo_empleado()
	{
		return view("Empleados.nuevo_empleado");
	}

    //    FUNCIÓN PARA LA ALTA DEL EMPLEADO
    public function guardaempleado(Request $request)
    {
        //SE GENERAN LAS VALIDACIONES PARA LOS FORMULARIOS
        $validacion = $this->validate($request,
        ['nombre_emple' =>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'apat_emple' => ['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'amat_emple' => ['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'curp' => ['regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}+$/'],
         'fecha_emple' => 'required',
         'sexo_emple' => 'required',
         'tipo' => 'required',
         'cp' => ['regex:/^[0-9]{5}$/'],
         'localidad_emple' => ['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'calle_emple' => ['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'num_int_emple' => 'required',
         'num_ext_emple' => 'required',
         'tele_emple' => ['regex:/^[0-9]{10}$/'],
         'correo_emple' => 'required|email',
         'arhivo' =>'image|mimes:jpg,jpeg,png,gif'
        ]);

        $file = $request->file('archivo');
        if($file!="")
		{
			$ldate = date('Ymd_His');
			$img = $file->getClientOriginalName();
			$img2 = $ldate.$img;
			\Storage::disk('local')->put($img2, \File::get($file));
		}
		else
		{
			$img2 = "profile-image.jpg";
        }
        
        $empleado = new empleados;
        $empleado->nombre_emple = $request->nombre_emple;
        $empleado->apat_emple = $request->apat_emple;
        $empleado->amat_emple = $request->amt_emple;
        $empleado->curp = $request->curp;
        $empleado->fecha_emple = $request->fecha_emple;
        $empleado->sexo_emple = $request->sexo_emple;
        $empleado->tipo = $request->tipo;
        $empleado->id_mun = $request->id_mun;
        $empleado->cp = $request->cp;
        $empleado->localidad_emple = $request->localidad_emple;
        $empleado->calle_emple = $request->calle_emple;
        $empleado->num_int_emple = $request->num_int_emple;
        $empleado->num_ext_emple = $request->num_ext_emple;
        $empleado->tele_emple = $request->tele_emple;
        $empleado->correo_emple = $request->correo_emple;
        $empleado->archivo = $img2;
        $empleado->save();

        return redirect('');
    }
}
