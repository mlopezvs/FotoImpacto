<?php

/**
* 
*/
class ControlVerPost //extends AnotherClass
{
	
	function ObtenerDatosPost($id_post,$usuario)
	{
		//echo $id_post;
		include_once('ie_Entidades/Entrada.php');
		$ObjEntrada = new Entrada;
		$datos_post = $ObjEntrada -> ObtenerDatosPostId($id_post);

		include_once('ie_Vistas/FormularioVerPost.php');
		$ObjVerPost = new FormularioVerPost;
		$ObjVerPost -> FormularioPost($datos_post,$usuario);


	}
}

?>