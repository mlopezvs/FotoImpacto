<?php

session_start();

	if (isset($_SESSION['username']) && isset($_SESSION['privilegios']) && isset($_POST['habilitar'])) {
		//echo "habilitar";

		$usuario['nombre'] 		= $_SESSION['username'];
		$usuario['privilegios'] = $_SESSION['privilegios'];

		$id_usuasrio = $_POST['cod'];

		include_once('Controles/Usuarios_ControlEstadoUsuarios.php');
		$ObjUsuarios = new Usuarios_ControlEstadoUsuarios;
		$ObjUsuarios -> HabilitarUsuario($id_usuasrio,$usuario);
	}

	elseif(isset($_SESSION['username']) && isset($_SESSION['privilegios']) && isset($_POST['deshabilitar'])){
		//echo "deshabilitar";

		$usuario['nombre'] 		= $_SESSION['username'];
		$usuario['privilegios'] = $_SESSION['privilegios'];

		$id_usuasrio = $_POST['cod'];

		include_once('Controles/Usuarios_ControlEstadoUsuarios.php');
		$ObjUsuarios = new Usuarios_ControlEstadoUsuarios;
		$ObjUsuarios -> DesHabilitarUsuario($id_usuasrio,$usuario);

	}

	elseif(isset($_SESSION['username']) && isset($_SESSION['privilegios']) && isset($_POST['eliminar'])){
		//echo "eliminar";
		$usuario['nombre'] 		= $_SESSION['username'];
		$usuario['privilegios'] = $_SESSION['privilegios'];

		$id_usuasrio = $_POST['cod'];

		include_once('Controles/Usuarios_ControlEstadoUsuarios.php');
		$ObjUsuarios = new Usuarios_ControlEstadoUsuarios;
		$ObjUsuarios -> EliminarUsuario($id_usuasrio,$usuario);
	}

	elseif (isset($_SESSION['username']) && isset($_SESSION['privilegios'])) {
			
			$usuario['nombre'] 		= $_SESSION['username'];
			$usuario['privilegios'] = $_SESSION['privilegios'];
		
		include_once('Controles/Usuarios_ControlObtenerUsuarios.php');
		$Obj= new Usuarios_ControlObtenerUsuarios;
		$Obj -> ControlObtenerUsuarios($usuario);

	}


	else{
		echo "Mostrar formulario de logueo y si se loguea, redireccionarlo a esta misma página";
	}


?>