<?php

session_start();

	if (!isset($_SESSION['username'])) {
		$usuario=0;
	}
	else{
		$usuario = $_SESSION['username'];
	}


if (isset($_POST['iniciar_sesion'])) {	
	
	$usuario 	= $_POST['email'];
	$password 	= $_POST['password'];

	include_once('ie_Controles/ControlIniciarSesion.php');
	$ObjIniciarSesion = new ControlIniciarSesion;
	$ObjIniciarSesion -> ValidarSesion($usuario,$password);

}

else{
	// include_once('ie_Vistas/Principal.php');
	// $ObjPrincipal = new Principal;
	// $ObjPrincipal -> MostrarPaginaInicioSesion($usuario);
	include_once('ie_Controles/ControlIniciarSesion.php');
	$ObjSesion = new ControlIniciarSesion;
	$ObjSesion -> IniciarSesion($usuario);
}

?>