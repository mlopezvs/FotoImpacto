<?php
include_once('ie_includes/Conexion.php');
class Entrada extends Conexion
{
	function RegistarNuevaEntrada($titulo, $titulo_id, $descripcion, $id_imagen, $fecha_registro, $id_usuario){

		$cn = $this-> ConectarDb();

		//addslashes y stripslashes
		$titulo 		= addslashes($titulo);
		$descripcion 	= addslashes($descripcion);

		$consulta= "INSERT INTO ie_entrada (titulo, titulo_id, descripcion,id_imagen,fecha_registro, id_usuario ) 
						values ('$titulo','$titulo_id','$descripcion','$id_imagen', '$fecha_registro','$id_usuario')";

		$resultado = mysql_query($consulta) or mysql_error();
		
		//var_dump($resultado);
		return $resultado;

		$this-> CerrarConexion($resultado,$cn);
	}

	function ObtenerEntradas(){

		$cn = $this-> ConectarDb();

		$consulta = "SELECT E.id_entrada, E.descripcion, E.titulo, E.estado, I.url_imagen, E.id_usuario from ie_entrada E inner join ie_imagenes I on E.id_imagen=I.id_imagen where E.estado='1' order by fecha_registro desc";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($resultado);

	}

	function ObtenerDatosPostId($id_post){

		$cn = $this->ConectarDb();

		$consulta = "SELECT e.id_entrada,e.titulo,e.descripcion, i.url_imagen, i.nombre_registro, e.id_usuario from ie_entrada e inner join ie_imagenes i where e.id_entrada='$id_post' && e.id_imagen=i.id_imagen";
		$resultado[0] = $dat=mysql_fetch_array(mysql_query($consulta,$cn));	
			$entradas_autor= $this-> ObtenerEntradasDeAutor($dat['id_usuario']);
		$resultado[1] = $entradas_autor;
		return ($resultado);

		$this-> CerrarConexion($resultado,$cn);

	}

	function ObtenerEntradasDeAutor($id_autor){

		$cn = $this->ConectarDb();

		$consulta = "SELECT e.id_entrada,e.titulo, i.url_imagen,e.id_usuario from ie_entrada e inner join ie_imagenes i where e.id_imagen=i.id_imagen && e.id_usuario='$id_autor'";
		$resultado = mysql_query($consulta,$cn);

		// while($r=mysql_fetch_array($resultado)){
		// 	echo $r['url_imagen']."<br>";
		// }

		return ($resultado);

		$this-> CerrarConexion($resultado,$cn);

	}
	

}

?>