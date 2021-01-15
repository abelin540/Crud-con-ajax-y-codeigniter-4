<?php namespace App\Controllers;
	
	use App\Models\HomePostModel;

class HomePost extends BaseController
{
	public function agregarUsuarios() {

		$data = array("nombre" => $_POST['nombre'],
					   "tipomadera" => $_POST['tipomadera'],
					
					   "costoventa" => $_POST['costoventa'],
					   "costocompra" => $_POST['costocompra'],
					   "fecha" => $_POST['fecha']
					);
		$model =  new HomePostModel();
		echo $exito = $model->agregarUsuario($data);
	}

	public function obtenerTodosLosUsuarios(){
		$model =  new HomePostModel();
		$datos = $model->obtenerTodosLosUsuariosModel();

		echo json_encode($datos);
	}

	public function eliminaUsuario(){
		$model =  new HomePostModel();
		$datos = array("id_mueble" => $_POST['idmueble']);
		echo $model->eliminaUsuario($datos);

	}

	public function obtenerDatosUpdate() {
		$model =  new HomePostModel();
		$data = array('id_mueble' => $_POST['idmueble']);
		echo $model->obtenerDatosUpdate($data);
	}

	public function actualizarUsuario() {
		$model =  new HomePostModel();
		$data = array('id_mueble' => $_POST['idmuebleu'],
						'nombre' => $_POST['usuariou'],
						'tipomadera' => $_POST['tipomaderau'],
						'costoventa' => $_POST['costoventau'],
						'costocompra' => $_POST['costocomprau'],

						'fecha' => $_POST['fechau']);


		echo $model->actualizarUsuario($data);
	}	
	//--------------------------------------------------------------------

}
