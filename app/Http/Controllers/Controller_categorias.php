<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\categorias;

class Controller_categorias extends Controller
{
    //vista del formilario nueva categoria 
    public function nuevacategoria()
    {
        return view("Categorias.Nueva_categoria");
    }
   //funcion para guarar una nueva categoria
   public function guardarcategoria(Request $request)
   {
    //validacion para el formulario de nueva categoria
    $this->validate($request,[
        'categoria'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
        'descripcion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,0-9]+$/']
    ]);

    $categorias = new categorias;
    $categorias->categoria = $request->categoria;
    $categorias->descripcion = $request->descripcion;
    $categorias->save();
    return redirect('nuevacategoria');

   }

   public function reportecategoria()
   {
       $categorias = categorias::withTrashed()
                                ->orderBy('idc','ASC')
                                ->paginate();
       return view('Categorias.Reportecategoria', compact('categorias'));                         
   }

   public function editacategoria($idc)
   {
      $categoria = categorias::withTrashed()->where('idc','=', $idc)->get();
      return view("Categorias.Modificar_Categoria")->with("categoria",$categoria[0]);
    }

   public function actualizacategoria(Request $request)
   {
        $idc = $request->idc;
        $validacion = $this->validate($request,[
            'categoria'=>['required','regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'descripcion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,0-9]+$/']
        ]);
        $categorias = categorias::find($idc);
        $categorias->categoria = $request->categoria;
    $categorias->descripcion = $request->descripcion;
    $categorias->save();
    return redirect('reportecategoria');
   }

   //Funcion para la eliminacion logica de una maquina
	public function desactivacategoria(Request $request, $idc)
	{
		if($request->ajax())
		{
			$categoria = categorias::find($idc);
			$categoria->delete();
			$cat_total = categorias::withTrashed()->count();

			return response()->json([
				'total' => $cat_total,
				'message' => $categoris->categoria . 'Fue desactivada correctamente'
			]);
		}
	}
    //Funcion para la restaurar una maquina
	public function restauracategoria(Request $request, $idc)
	{
		if($request->ajax())
		{
			$categoria = categorias::withTrashed('categoria')->where('idc',$idc);
			$categoria->restore();
			$cat_total = categorias::withTrashed()->count();

			return response()->json([
				'total' => $cat_total,
				'message' => $categoria->categoria . 'Fue activada correctamente'
			]);
		}
    }
    public function eliminacategoria(Request $request, $idc)
	{
		if($request->ajax())
		{
			$categoria = categorias::withTrashed('categoria')->where('idc',$idc);
			$categoria->forceDelete();
			$cat_total = categorias::withTrashed()->count();

			return response()->json([
				'total' => $cat_total,
				'message' => $categoria->categoria . 'Fue elimonado correctamente'
			]);
		}
	}


}
