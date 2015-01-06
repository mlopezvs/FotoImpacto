<?php

/**
* 
*/
include_once('ie_Controles/ControlRecursos.php');
class ControlPrincipal extends ControlRecursos
{

	function ControlPaginaPrincipal($usuario){

		include_once('ie_Entidades/Entrada.php');
		$ObjEntradas = new Entrada;
		$entradas = $ObjEntradas -> ObtenerEntradas();

		include_once('ie_Vistas/Principal.php');
		$ObjPrincipal = new Principal;
		$ObjPrincipal -> MostrarPaginaIndex($entradas, $usuario);		

	}

	// function ControlPrincipal(){
	// 	@session_start();
	// }

	// function ControlRegistro($usuario){

	// 	include_once('ie_Vistas/FormularioRegistrarUsuario.php');
	// 	$ObjPrincipal = new FormularioRegistrarUsuario;
	// 	$ObjPrincipal -> VerificarRegistrarUsuario($usuario);
	// }
	

}

?>