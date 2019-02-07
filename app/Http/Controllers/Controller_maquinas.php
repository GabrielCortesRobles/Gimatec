<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Controller_maquinas extends Controller
{
    //Vista de nueva maquina
	public function nuevamaquina()
	{
		return view("Maquinas.Nueva_maquina");
	}
}
