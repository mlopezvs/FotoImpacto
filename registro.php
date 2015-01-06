<?php

session_start();

	if (!isset($_SESSION['username'])) {
		$usuario=0;
	}
	else{
		$usuario = $_SESSION['username'];
	}


if (isset($_POST['registro'])) {

	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

include_once('ie_Controles/ControlRegistrarUsuario.php');
$ObjPrincipal = new ControlRegistrarUsuario;
$ObjPrincipal -> FormularioRegistro($email,$password);
//$ObjPrincipal -> MostrarPaginaRegistro2();

}

elseif(isset($_POST['registro2'])){

	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

	//$nombre		=	utf8_decode($_POST['nombre']);
	$nombre = htmlentities($_POST['nombre']);
	$fnac		= $_POST['fnac'];

	if (isset($_POST['genero'])) {
		$genero = $_POST['genero'];
	}
	else{
		$genero="N";			
	}

include_once('ie_Controles/ControlRegistrarUsuario.php');
$ObjPrincipal = new ControlRegistrarUsuario;
$ObjPrincipal -> FormularioRegistro2($email,$password,$nombre,$fnac,$genero);


}

else{

include_once('ie_Controles/ControlRegistrarUsuario.php');
$ObjPrincipal = new ControlRegistrarUsuario;
$ObjPrincipal -> ControlFormRegistrar($usuario);

}

?>