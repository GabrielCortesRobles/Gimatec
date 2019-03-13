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
        $municipios = municipios::all();
        return view("Empleados.nuevo_empleado")->with("municipios",$municipios);
	}

    //    FUNCIÓN PARA LA ALTA DEL EMPLEADO
    public function guardaempleado(Request $request)
    {
        //SE GENERAN LAS VALIDACIONES PARA LOS FORMULARIOS
        $this->validate($request,
        ['nombre_emple' =>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'apat_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'amat_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'curp' => ['required','regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}+$/'],
         'fecha_emple'=>'required|date',
         'cp' => ['required','regex:/^[0-9]{5}$/'],
         'localidad_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,.]+$/'],
         'calle_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'num_int_emple' => 'required',
         'num_ext_emple' => 'required',
         'idmun' => 'required',
         'tele_emple' => ['required','regex:/^[0-9]{10}$/'],
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
			$img2 = "default-image.jpg";
        }
        
        $empleados = new empleados;
        $empleados->nombre_emple = $request->nombre_emple;
        $empleados->apat_emple = $request->apat_emple;
        $empleados->amat_emple = $request->amat_emple;
        $empleados->curp = $request->curp;
        $empleados->fecha_emple = $request->fecha_emple;
        $empleados->sexo_emple = $request->sexo_emple;
        $empleados->tipo = $request->tipo;
        $empleados->idmun = $request->idmun;
        $empleados->cp = $request->cp;
        $empleados->localidad_emple = $request->localidad_emple;
        $empleados->calle_emple = $request->calle_emple;
        $empleados->num_int_emple = $request->num_int_emple;
        $empleados->num_ext_emple = $request->num_ext_emple;
        $empleados->tele_emple = $request->tele_emple;
        $empleados->correo_emple = $request->correo_emple;
        $empleados->pass_emple = $request->pass_emple;
        $empleados->archivo = $img2;
        $empleados->save();
        return redirect('nuevo_empleado');
    
    }

    //Funcion para la vista del reporte de las maquinas
	public function reporteempleado()
        {
            $empleados = empleados::withTrashed()
                                    ->orderBy('ide','ASC')
                                    ->paginate();
            return view('Empleados.Reporteempleado', compact('empleados'));
        }

	//Funcion para la eliminacion logica de una maquina
	public function desactivaempleado(Request $request, $ide)
        {
            if($request->ajax())
            {
                $empleado = empleados::find($ide);
                $empleado->delete();
                $emp_total = empleados::withTrashed()->count();

                return response()->json([
                    'total' => $emp_total,
                    'message' => $empleado->nombre_emple . 'Fue desactivada correctamente'
                ]);
            }
        }

	//Funcion para la restaurar una maquina
	public function restauraempleado(Request $request, $ide)
        {
            if($request->ajax())
            {
                $empleado = empleados::withTrashed('nombre_emple')->where('ide',$ide);
                $empleado->restore();
                $emp_total = empleados::withTrashed()->count();

                return response()->json([
                    'total' => $emp_total,
                    'message' => $empleado->nombre_emple . 'Fue activada correctamente'
                ]);
            }
        }

    public function eliminaempleado(Request $request, $ide)
        {
            if($request->ajax())
            {
                $empleado = empleados::withTrashed()->where('ide',$ide);
                $empleado->forceDelete();
                $emp_total = empleados::withTrashed()->count();

                return response()->json([
                    'total' => $emp_total,
                    'message' => $empleado->nombre_emple . 'Fue eliminado correctamente'
                ]);
            }
        }

       
    public function editaempleado($ide)
    {
        $mempleado = empleados::withTrashed()->where('ide','=',$ide)->get();
        $sexo = $mempleado[0]->sexo;
        $idmunemp = $mempleado[0]->idmun;
		$munemp = municipios::where('idmun','=',$idmunemp)
									->orderBy('municipio','ASC')
									->get();
		$demasmun = municipios::where('idmun', '!=', $idmunemp)
									->orderBy('municipio','ASC')
                                    ->get();
        return view("Empleados.Modifica_empleado")->with("mempleado",$mempleado[0])
        ->with("sexo",$sexo)
        ->with("idmunemp",$idmunemp)
        ->with("munemp",$munemp[0]->municipio)
        ->with("demasmun",$demasmun);
    }

    public function actualizaempleado(Request $request)
    {
        $ide = $request->ide;
        $this->validate($request,
        ['nombre_emple' =>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'apat_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'amat_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'curp' => ['required','regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}+$/'],
         'fecha_emple'=>'required|date',
         'cp' => ['required','regex:/^[0-9]{5}$/'],
         'localidad_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,.]+$/'],
         'calle_emple' => ['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'num_int_emple' => 'required',
         'num_ext_emple' => 'required',
         'idmun' => 'required',
         'tele_emple' => ['required','regex:/^[0-9]{10}$/'],
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
        $empleados = empleados::find($ide);
		if($file!="")
		{
            $empleados->archivo = $img2;
        }
        $empleados->nombre_emple = $request->nombre_emple;
        $empleados->apat_emple = $request->apat_emple;
        $empleados->amat_emple = $request->amat_emple;
        $empleados->curp = $request->curp;
        $empleados->fecha_emple = $request->fecha_emple;
        $empleados->sexo_emple = $request->sexo_emple;
        $empleados->tipo = $request->tipo;
        $empleados->idmun = $request->idmun;
        $empleados->cp = $request->cp;
        $empleados->localidad_emple = $request->localidad_emple;
        $empleados->calle_emple = $request->calle_emple;
        $empleados->num_int_emple = $request->num_int_emple;
        $empleados->num_ext_emple = $request->num_ext_emple;
        $empleados->tele_emple = $request->tele_emple;
        $empleados->correo_emple = $request->correo_emple;
        $empleados->pass_emple = $request->pass_emple;
        $empleados->save();

        return redirect ('reporteempleado');
    }


    Public function validalogin(Request $request)
    {
        $correo_emple = $request->correo_emple;
        $pass_emple = $request->pass_emple;
        $consulta = empleados::withTrashed()
                                ->where('correo_emple', $correo_emple)
                                ->where('pass_emple', $pass_emple)
                                ->get();
        if(count($consulta)==0)
        {
			Session::flash('ups', 'Upps!');
            Session::flash('error', 'El usuario no existe o la contraseña es incorrecta');
            return redirect()->route('/');
        }
        else
        {
            if($consulta[0]->deleted_at !="")
            {
                Session::flash('error', 'El usuario esta desactivado, consulte a su administrador');
                return redirect()->route('/');
            }
            else
            {
                Session::put('sesionname', $consulta[0]->nombre_emple);
                Session::put('sesionid_empleado', $consulta[0]->ide);
                //esto sirve para leer las sesiones
                /*$sname = Session::get('sesionname');
                $sidu = Session::get('sesionidu');
                $stipo = Session::get('sesiontipo');

                echo $sname. ' '.$sidu .' '. $stipo;*/
                return redirect()->route('home');
            }
        }
    }

}
