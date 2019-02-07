<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Controller_inicio extends Controller
{
    //Vista de inicio, es la primera vista que el usuario vera al logearse
	public function home()
	{
		return view("Header.Iconos");
	}
}
