<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_prospectos extends Controller
{
    //vista del formulario nuevo prospecto
    public function nuevoprospecto()
    {
        return view("Prospectos.Nuevo_prospecto");
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
            


        ]);
    
    }
}
