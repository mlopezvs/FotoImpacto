<?php 
session_start();
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

		////////////////////////////  filtro

	if(isset($_SESSION['username']) && isset($_POST['foto'])){
				
		$error_foto = $_FILES['foto']['error'];
		echo "Chrome: ".$_POST["orientacionChrome"]."<br>";
		echo "Firefox: ".$_POST["orientacionFirefox"];

		include_once('ie_Controles/ControlRegistrarPublicacion.php');
		$ObjRegistro = new ControlRegistrarPublicacion;
		//$ObjRegistro -> RegistrarPublicacion($error_foto,$id_usuario,$usuario);
	}

	elseif(isset($_SESSION['username']) && isset($_POST['registrar_foto'])){

		$titulo 		= $_POST['titulo'];
		$descripcion 	= $_POST['descripcion'];
		$id_imagen 		= $_POST['id_imagen'];
		$url_imagen		= $_POST['url_imagen'];

		// echo $r=trim($titulo);
		// echo "<br>".gettype($r);

		// if(trim($titulo)==""){
		// 	echo "campo vacio";
		// }

		include_once('ie_Controles/ControlRegistrarPublicacion.php');
		$ObjControlRegistarPublicacion = new ControlRegistrarPublicacion;
		$ObjControlRegistarPublicacion -> AdjuntarDatosAImagen($titulo, $descripcion, $id_imagen,$url_imagen,$id_usuario);

	}

	elseif (isset($_POST['envio_foto'])) {
		
		if (!isset($_SESSION['username'])) {
			
				include_once('ie_Controles/ControlIniciarSesion.php');
			$ObjSesion = new ControlIniciarSesion;
			$ObjSesion -> IniciarSesion($usuario);
		}
		else{


		include_once('ie_Controles/ControlRegistrarPublicacion.php');
		$ObjFormulario = new ControlRegistrarPublicacion;
		$ObjFormulario -> ControlRegistrar($usuario);
		}
		
	}

	else{
		//echo $usuario;
		include_once('ie_Controles/ControlPrincipal.php');
		$ObjControlPrincipal = new ControlPrincipal;
		$ObjControlPrincipal -> ControlPaginaPrincipal($usuario);
	}

?>