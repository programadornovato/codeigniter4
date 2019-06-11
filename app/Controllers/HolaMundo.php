<?php namespace App\Controllers;

use CodeIgniter\Controller;

class HolaMundo extends BaseController
{
	public function index()
	{
        $datos['llave1']="dato 1 desde index";
		return view('vista_hola_mundo',$datos);
	}
	public function desdeSubCarpeta()
	{
        $datos['llave1']="dato 1";
		return view('vista_hola_mundo',$datos);
	}

	//--------------------------------------------------------------------

}
