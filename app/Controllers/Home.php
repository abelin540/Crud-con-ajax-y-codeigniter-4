<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$vistas = view('layouts/header') . view('muebles/inicio') . view('layouts/footer');
		return $vistas;	}

	public function vistamuebles() {
		$vistas = view('layouts/header') . view('muebles/inicio') . view('layouts/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
