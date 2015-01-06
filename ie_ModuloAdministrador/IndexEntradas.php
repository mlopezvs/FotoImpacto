<?php

session_start();

	if (isset($_SESSION['username']) && isset($_SESSION['privilegios']) && isset($_POST['publicar'])) {
		//echo "publicar";
		$usuario['nombre'] 		= $_SESSION['username'];
		$usuario['privilegios'] = $_SESSION['privilegios'];
		
		$id_entrada=$_POST['cod'];
		include_once('Controles/Entradas_ControlEstadoEntradas.php');
		$ObjEstado = new Entradas_EstadoEntradas;
		$ObjEstado ->	PublicarEntrada($id_entrada,$usuario);
	}

	elseif(isset($_SESSION['username']) && isset($_SESSION['privilegios']) && isset($_POST['despublicar'])){
		//echo "despublicar";
		$usuario['nombre'] 		= $_SESSION['username'];
		$usuario['privilegios'] = $_SESSION['privilegios'];

		$id_entrada=$_POST['cod'];
		include_once('Controles/Entradas_ControlEstadoEntradas.php');
		$ObjEstado = new Entradas_EstadoEntradas;
		$ObjEstado -> 	DespublicarEntrada($id_entrada,$usuario)	;
	}

	elseif(isset($_SESSION['username']) && isset($_SESSION['privilegios']) && isset($_POST['eliminar'])){
		//echo "eliminar";

		$usuario['nombre'] 		= $_SESSION['username'];
		$usuario['privilegios'] = $_SESSION['privilegios'];

		$url_img = $_POST['url_img'];

		$id_entrada=$_POST['cod'];
		include_once('Controles/Entradas_ControlEstadoEntradas.php');
		$ObjEstado = new Entradas_EstadoEntradas;
		$ObjEstado ->	EliminarEntrada($id_entrada,$url_img,$usuario);
	}

	elseif (isset($_SESSION['username']) && isset($_SESSION['privilegios'])) {
			
			$usuario['nombre'] 		= $_SESSION['username'];
			$usuario['privilegios'] = $_SESSION['privilegios'];
		
		include_once('Controles/Entradas_ControlObtenerEntradas.php');
		$Obj= new Entradas_ControlObtenerEntradas;
		$Obj -> ControlObtenerEntradas($usuario);

	}


	else{
		echo "Mostrar formulario de logueo y si se loguea, redireccionarlo a esta misma página";
	}

?>