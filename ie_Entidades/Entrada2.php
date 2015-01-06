<?php

include_once('../ie_includes/Conexion.php');
class Entrada2 extends Conexion
{
	
	function Administrador_ObtenerEntradas(){

		$cn = $this-> ConectarDb();

		$consulta = "SELECT E.id_entrada as id_entrada, E.titulo as titulo,E.titulo_id as titulo_id, E.descripcion as descripcion, E.estado as estado, I.url_imagen as url_imagen from ie_entrada E inner join ie_imagenes I on E.id_imagen=I.id_imagen order by E.fecha_registro desc";
		$resultado = mysql_query($consulta,$cn);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}

	function __Administrador_ObtenerEntradas_Imagen(){

		$cn = $this-> ConectarDb();

		$consulta = "SELECT E.descripcion, E.titulo, E.estado, I.url_imagen from ie_entrada E inner join ie_imagenes I on E.id_imagen=I.id_imagen order by E.fecha_registro desc'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado);		

	}

	function PublicarEntrada($id_entrada){

		$cn = $this-> ConectarDb();

		$consulta = "UPDATE ie_entrada set estado='1' where id_entrada='$id_entrada'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}

	function DesPublicarEntrada($id_entrada){

		$cn = $this-> ConectarDb();

		$consulta = "UPDATE ie_entrada set estado='0' where id_entrada='$id_entrada'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}

	function EliminarEntrada($id_entrada){

		$cn = $this-> ConectarDb();

		$consulta = "DELETE FROM ie_entrada where id_entrada='$id_entrada'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado,$cn);

	}			
}


?>