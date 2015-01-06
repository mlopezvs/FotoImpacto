<?php

/**
* 
*/
class Usuarios_ControlObtenerUsuarios //extends AnotherClass
{
	
	function ControlObtenerUsuarios($DatosUsuario)
	{
		include_once('../ie_Entidades/Usuario2.php');
		$ObjUsuarios = new Usuario2;
		$usuarios = $ObjUsuarios -> Administrador_ObtenerUsuarios();

		include_once('../ie_ModuloAdministrador/Vistas/Usuarios_FormMostrarUsuarios.php');
		$ObjFormUsuarios = new Usuarios_FormMostrarUsuarios;
		$ObjFormUsuarios -> MostrarUsuarios($usuarios,$DatosUsuario);

	}
}

?>