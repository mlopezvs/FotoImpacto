<?php

/**
* 
*/
class Entradas_ControlObtenerEntradas //extends AnotherClass
{
	
	function ControlObtenerEntradas($usuario)
	{
		include_once('../ie_Entidades/Entrada2.php');
		$ObjEntrada = new Entrada2;
		$entradas = $ObjEntrada -> Administrador_ObtenerEntradas();

		include_once('../ie_ModuloAdministrador/Vistas/Entradas_FormMostrarEntradas.php');
		$ObjFormEntradas = new Entradas_FormMostrarEntradas;
		$ObjFormEntradas -> MostrarEntradas($entradas,$usuario);

	}
}

?>