<?php

/**
* 
*/
include_once('ie_includes/Conexion.php');
class Imagenes extends Conexion
{
	
	function RegistarImagen($nombre_archivo_imagen,$nombre_imagen,$tamano_imagen,$extension_imagen,$fecha_registro,$url_img,$id_usuario)
	{
		$cn = $this-> ConectarDB();	
		$consulta = "INSERT INTO ie_imagenes (nombre_registro,nombre_archivo, size_kb, extension, fregistro, url_imagen) values 
									('$nombre_archivo_imagen','$nombre_imagen','$tamano_imagen','$extension_imagen','$fecha_registro','$url_img')";
		$resultado = mysql_query($consulta);
		$id_imagen=mysql_insert_id($cn);

		$consulta2 = "SELECT id_imagen, url_imagen, nombre_registro FROM ie_imagenes WHERE id_imagen='$id_imagen'";
		$datos_imagen = mysql_query($consulta2);


		$vector[0]=$resultado;
		$vector[1]=mysql_fetch_array($datos_imagen);

		return $vector;							

		$this->CerrarConexion($vector,$cn);
	}
}

?>