<?php

/**
* 
*/
class Usuarios_ControlEstadoUsuarios //extends Entrada2
{
		
	function ObtenerId($id){
		$id_usuario=base64_decode($id);
		$id_usuario=unserialize($id_usuario);
		return $id_usuario;
	}
	
	function HabilitarUsuario($id,$usuario)
	{
		$id_usuario=$this-> ObtenerId($id);

		include_once('../ie_Entidades/Usuario2.php');
		$ObjUsuario2 = new Usuario2;
		$resultado = $ObjUsuario2 -> HabilitarUsuarioId($id_usuario);
		
		if ($resultado==true) {

		include_once('Controles/Usuarios_ControlObtenerUsuarios.php');
		$Obj= new Usuarios_ControlObtenerUsuarios;
		$Obj -> ControlObtenerUsuarios($usuario);
		}
		else{
			echo "hubo un error en habilitar usuario, <a href='index.php'>inicio</a>";
		}
	}

	function DesHabilitarUsuario($id,$usuario)
	{
		$id_usuario=$this-> ObtenerId($id);

		include_once('../ie_Entidades/Usuario2.php');
		$ObjUsuario2 = new Usuario2;
		$resultado = $ObjUsuario2 -> DesHabilitarUsuarioId($id_usuario);
		
		if ($resultado==true) {

		include_once('Controles/Usuarios_ControlObtenerUsuarios.php');
		$Obj= new Usuarios_ControlObtenerUsuarios;
		$Obj -> ControlObtenerUsuarios($usuario);
		}
		else{
			echo "hubo un error en la deshabilitar usuario, <a href='index.php'>inicio</a>";
		}
	}

	function EliminarUsuario($id,$usuario)
	{
		$id_usuario=$this-> ObtenerId($id);

		include_once('../ie_Entidades/Usuario2.php');
		$ObjUsuario2 = new Usuario2;
		$resultado = $ObjUsuario2 -> EliminarUsuarioId($id_usuario);
		
		if ($resultado==true) {
			include_once('Controles/Usuarios_ControlObtenerUsuarios.php');
			$Obj= new Usuarios_ControlObtenerUsuarios;
			$Obj -> ControlObtenerUsuarios($usuario);

		}
		else{
			echo "Si tiene aportes, para eliminar al usuario, primero debe eliminar los aportes, <a href='../index.php'>inicio</a>";
		}	
			
	}
}

?>