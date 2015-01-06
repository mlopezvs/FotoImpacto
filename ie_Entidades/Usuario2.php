<?php

include_once('../ie_includes/Conexion.php');
class Usuario2 extends Conexion
{
	
	function Administrador_ObtenerUsuarios(){

		$cn = $this-> ConectarDb();

		$consulta = "SELECT U.id_usuario as id_usuario, U.nombre as nombre,U.genero as genero, U.estado as estado,U.tipo_usuario as tipo_usuario from ie_usuario U order by U.fecha_registro, U.tipo_usuario desc";
		$resultado = mysql_query($consulta,$cn);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}


	function HabilitarUsuarioId($id_usuario){

		$cn = $this-> ConectarDb();

		$consulta = "UPDATE ie_usuario set estado='1' where id_usuario='$id_usuario'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}

	function DesHabilitarUsuarioId($id_usuario){

		$cn = $this-> ConectarDb();

		$consulta = "UPDATE ie_usuario set estado='0' where id_usuario='$id_usuario'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}

	function EliminarUsuarioId($id_usuario){

		$cn = $this-> ConectarDb();
		//echo $id_usuario;
		$consulta = "DELETE FROM ie_usuario where id_usuario='$id_usuario'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}			
}


?>