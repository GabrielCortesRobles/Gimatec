<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\prospectos;
use App\municipios;
use App\tipoprospectos;
use App\empleados;

class Controller_prospectos extends Controller
{
    //vista del formulario nuevo prospecto
    public function nuevoprospecto()
    {
        $municipios = municipios::all();
        $tipoprospectos = tipoprospectos::all();
        $empleados = empleados::all();
        return view("Prospectos.Nuevo_prospecto")
        ->with('empleados', $empleados)
        ->with('tipoprospectos', $tipoprospectos)
        ->with('municipios', $municipios);
        
    }
    //funcion para guarda un nuevo prospecto
    public function guardarprospecto(Request $request)
    //request guarda los datos del formulario 
    {
        //validaciones para el formulario de nuevo prospecto 
        $this->validate($request,[  
            'nombre_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'apat_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'amat_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'curp_pro'=>['regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}+$/'],
            'fecha_pro'=> 'required',
            'sexo_pro'=> 'required',
            'empresa'=>'image|mimes:jpg,jpeg,png,gif',
            'cp_pro'=>'required|numeric',
            'localidad_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'calle_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'num_int_pro'=>'required|numeric',
            'num_ext_pro'=>'required|numeric',
            'tele_pro'=>'required|numeric',

        ]);

        $file = $request->file('empresa');
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

        $prospectos = new prospectos;
        $prospectos->nombre_pro = $request->nombre_pro;
        $prospectos->apat_pro = $request->apat_pro;
        $prospectos->amat_pro = $request->amat_pro;
        $prospectos->curp_pro = $request->curp_pro;
        $prospectos->fecha_pro = $request->fecha_pro;
        $prospectos->sexo_pro = $request->sexo_pro;
        $prospectos->correo_pro = $request->correo_pro;
        $prospectos->empresa = $img2;
        $prospectos->cp_pro = $request->cp_pro;
        $prospectos->localidad_pro = $request->localidad_pro;
        $prospectos->calle_pro = $request->calle_pro;
        $prospectos->num_int_pro = $request->num_int_pro;
        $prospectos->num_ext_pro = $request->num_ext_pro;
        $prospectos->tele_pro = $request->tele_pro;
        $prospectos->ide = $request->ide;
        $prospectos->idstatus = $request->idstatus;
        $prospectos->idmun = $request->idmun;
        $prospectos->save();
        return redirect('nuevoprospecto');
    
    }
    public function reporteprospecto()
    {
        $prospectos = prospectos::withTrashed()
                                    ->orderBy('idp','asc')
                                    ->paginate();
        return view('Prospectos.Reporteprospecto', compact('prospectos'));
    }
     public function editaprospecto($idp)
     {
         $prospecto = prospectos::withTrashed()->where('idp','=',$idp)->get();
         $ide = $prospecto[0]->ide;
         $idstatus = $prospecto[0]->idstatus;
         $idmun = $prospecto[0]->idmun;
         $empleactual = empleados::withTrashed()->where('ide','=',$ide)->get();
         $demasemple = empleados::withTrashed()->where('ide','!=',$ide)->get();
         $staactual = tipoprospectos::withTrashed()->where('idstatus','=',$idstatus)->get();
         $demassta = status::withTrashed()->where('idstatus','!=',$idstatus)->get();
         $munactual = municipios::where('idmun','=',$idmun)->get();
         $demasmun =  municipios::where('idmun','!=',$idmun)->get();
         return view("Prospectos.Modificar_Prospecto")->with("prospecto",$prospecto[0])
                                                      ->with('ide',$ide)
                                                      ->with('empleactual',$empleactual[0]->nombre_emple)
                                                      ->with('demasemple',$demasemple)
                                                      ->with('idstatus',$idstatus)
                                                      ->with('staactual',$staactual[0]->statuss)
                                                      ->with('demassta',$demassta)
                                                      ->with('idmun',$idmun)
                                                      ->with('munactual',$munactual[0]->municipio)
                                                      ->with('demasmun',$demasmun);


     }
     public function actualizaprospecto(Request $request)
     {
         $idp =$request->idp;
         $validacion = $this->validate($request,[
            'nombre_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'apat_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'amat_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'curp_pro'=>['regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}+$/'],
            'fecha_pro'=> 'required',
            'sexo_pro'=> 'required',
            'empresa'=>'image|mimes:jpg,jpeg,png,gif',
            'cp_pro'=>'required|numeric',
            'localidad_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'calle_pro'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'num_int_pro'=>'required|numeric',
            'num_ext_pro'=>'required|numeric',
            'tele_pro'=>'required|numeric',

         ]);

         $file = $request->file('empresa');
         if($file != "")
         {
             $ldate = date('Ymd_His');
             $img = $file->getClientOriginalName();
             $img2 = $ldate.$img;
             \Storage::disk('local')->put($img2, \File::get($file));
         }

         $prospectos = prospectos::find($idp);
         if ($file != "")
         {
            $prospectos->empresa = $img2;
         }
         $prospectos->nombre_pro = $request->nombre_pro;
         $prospectos->apat_pro = $request->apat_pro;
         $prospectos->amat_pro = $request->amat_pro;
         $prospectos->curp_pro = $request->curp_pro;
         $prospectos->fecha_pro = $request->fecha_pro;
         $prospectos->sexo_pro = $request->sexo_pro;
         $prospectos->correo_pro = $request->correo_pro;
         $prospectos->cp_pro = $request->cp_pro;
         $prospectos->localidad_pro = $request->localidad_pro;
         $prospectos->calle_pro = $request->calle_pro;
         $prospectos->num_int_pro = $request->num_int_pro;
         $prospectos->num_ext_pro = $request->num_ext_pro;
         $prospectos->tele_pro = $request->tele_pro;
         $prospectos->ide = $request->ide;
         $prospectos->idstatus = $request->idstatus;
         $prospectos->idmun = $request->idmun;
         $prospectos->save();
         return redirect('reporteprospecto');
     } 
     public function desactivaprospecto(Request $request, $idp)
	{
		if($request->ajax())
		{
			$prospecto = prospectos::find($idp);
			$prospecto->delete();
			$pro_total = prospectos::withTrashed()->count();

			return response()->json([
				'total' => $pro_total,
				'message' => $prospectos->nombre_pro . 'Fue desactivada correctamente'
			]);
		}
	}
    //Funcion para la restaurar una maquina
	public function restauraprospecto(Request $request, $idp)
	{
		if($request->ajax())
		{
			$prospecto = prospectos::withTrashed('nombre_pro')->where('idp',$idp);
			$prospecto->restore();
			$pro_total = prospectos::withTrashed()->count();

			return response()->json([
				'total' => $pro_total,
				'message' => $prospecto->prospecto . 'Fue activada correctamente'
			]);
        }
        
    }
    public function eliminaprospecto(Request $request, $idp)
	{
		if($request->ajax())
		{
			$prospecto = prospectos::withTrashed('nombre_pro')->where('idp',$idp);
			$prospecto->forceDelete();
			$pro_total = prospectos::withTrashed()->count();

			return response()->json([
				'total' => $pro_total,
				'message' => $prospectos->nombre_pro . 'Fue elimonado correctamente'
			]);
		}
	}
    


}
