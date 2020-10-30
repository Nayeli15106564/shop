<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

		$datos = [
					"nombre" => "Roldan Aquino",
					"correo" => "roldan@gmail.com",
					"escuela" => "Tec 1"
				];
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('persona', $datos).
					view('plantilla/footer');
		return $vistas;
	}

	public function persona()
	{

		$datos = [
					"nombre" => "Roldan Aquino",
					"correo" => "roldan@gmail.com",
					"escuela" => "Tec 1"
				];

		return view('persona', $datos);
	}

	public function direccionObtenida($direccion, $p2) {
		echo $direccion.$p2;
	}

	public function contacto() {
		return view('contacto');
	}

	public function pasarPost() {
		echo $_POST['valor1'];
	}

	public function fundas(){
		$vistas1 = view('plantilla/header').
					view('plantilla/menu').
					view('fundas').
					view('plantilla/footer');
		return $vistas1;
	}

	public function audifonos(){
		$vistas2 = view('plantilla/header').
					view('plantilla/menu').
					view('audifonos').
					view('plantilla/footer');
		return $vistas2;
	}

	public function cargadores(){
		$vistas3 = view('plantilla/header').
					view('plantilla/menu').
					view('cargadores').
					view('plantilla/footer');
		return $vistas3;
	}

}