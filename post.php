<?php

session_start();

if (isset($_GET['id'])) {
	//echo
	 $id_post=$_GET['id'];
	
	//fintro de usuario
		if (isset($_SESSION['username']) && isset($_SESSION['privilegios'])) {
			
			$usuario['nombre'] 		= $_SESSION['username'];
			$usuario['privilegios'] = $_SESSION['privilegios'];


		}

		elseif (isset($_SESSION['username'])) {
			$usuario = $_SESSION['username'];
			$id_usuario=$_SESSION['id_usuario'];
		}

		else{
			$usuario=0;
		}

		//fin de filtro de tipo de usuario

	include_once('ie_Controles/ControlVerPost.php');
	$ObjPost = new ControlVerPost;
	$ObjPost -> ObtenerDatosPost($id_post,$usuario);


}
else{
	header('location:index.php');
}

?>