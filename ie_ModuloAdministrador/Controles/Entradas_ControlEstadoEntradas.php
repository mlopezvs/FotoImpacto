<?php

/**
* 
*/
class Entradas_EstadoEntradas //extends Entrada2
{
		
	function ObtenerId($id){
		$id_entrada=base64_decode($id);
		$id_entrada=unserialize($id_entrada);
		return $id_entrada;
	}
	
	function PublicarEntrada($id,$usuario)
	{
		$id_entrada=$this-> ObtenerId($id);

		include_once('../ie_Entidades/Entrada2.php');
		$ObjEntrada2 = new Entrada2;
		$resultado = $ObjEntrada2 -> PublicarEntrada($id_entrada);
		
		if ($resultado==true) {

		include_once('Controles/Entradas_ControlObtenerEntradas.php');
		$Obj= new Entradas_ControlObtenerEntradas;
		$Obj -> ControlObtenerEntradas($usuario);
		}
		else{
			echo "hubo un error en la publicación, <a href='index.php'>inicio</a>";
		}
	}

	function DespublicarEntrada($id,$usuario)
	{
		$id_entrada=$this-> ObtenerId($id);

		include_once('../ie_Entidades/Entrada2.php');
		$ObjEntrada2 = new Entrada2;
		$resultado = $ObjEntrada2 -> DesPublicarEntrada($id_entrada);
		
		if ($resultado==true) {

		include_once('Controles/Entradas_ControlObtenerEntradas.php');
		$Obj= new Entradas_ControlObtenerEntradas;
		$Obj -> ControlObtenerEntradas($usuario);
		}
		else{
			echo "hubo un error en la despublicación, <a href='index.php'>inicio</a>";
		}
	}

	function EliminarEntrada($id,$url_img,$usuario)
	{
		$id_entrada=$this-> ObtenerId($id);

		$url_img="../".$url_img;

		include_once('../ie_Entidades/Entrada2.php');
		$ObjEntrada2 = new Entrada2;
		$resultado = $ObjEntrada2 -> EliminarEntrada($id_entrada);
		
		if ($resultado==true) {

			if (unlink($url_img)) {
				# code...
			// include_once('Controles/Entradas_ControlObtenerEntradas.php');
			// $Obj= new Entradas_ControlObtenerEntradas;
			// $Obj -> ControlObtenerEntradas($usuario);
				echo "Exito en eliminacion de imagen, <a href='../index.php'>inicio</a>";				
			}
			else{
				echo "hubo un error al eliminar el archivo, <a href='../index.php'>inicio</a>";				
			}

		}
		else{
			echo "hubo un error en la despublicación, <a href='../index.php'>inicio</a>";
		}	
			
	}
}

?>