<?php

/**
* 
*/
include_once('ie_Controles/ControlRecursos.php');
class ControlRegistrarUsuario extends ControlRecursos
{
	
	function ControlFormRegistrar($usuario){

		include_once('ie_Vistas/FormularioRegistrarUsuario.php');
		$ObjPrincipal = new FormularioRegistrarUsuario;
		$ObjPrincipal -> MostrarFormularioRegistrarUsuario($usuario);
	}
	
	function FormularioRegistro($email,$password)
	{
		//$val_email=$this->ValidarEmail($email);

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$val_email 	  = true;   
		}
		else{
			$val_email 	  = false;
		}

		$val_password = $this-> ValidarDatos($password);

		if ($val_email==true && $val_password==true) {
			
			include_once('ie_Entidades/Usuario.php');
			$ObjRegistro = new Usuario;
			$r = $ObjRegistro -> VerificarRegistrarUsuario($email);			

			if ($r==1) {
				# code...
			$usuario=0;
			include_once('ie_Vistas/FormularioRegistrarUsuario.php');
			$ObjRegistrarUsuario = new FormularioRegistrarUsuario;
			$ObjRegistrarUsuario -> MostrarFormularioRegistrarUsuario2($email,$password,$usuario);
			}
			else{
				echo utf8_decode("este email ya está registrado, <a href='javascript:history.back(1)'>volver</a>");
			}

		}
		else{
			include_once('ie_Vistas/Principal.php');
			$ObjPrincipal = new Principal;
			//$ObjPrincipal -> MostrarMensaje_warning();

			$mensaje = "Verifique su: <br>";
			if ($val_email==false) {
				$mensaje.="-> Email";
			}

			if ($val_password==false) {
				$mensaje.="<br>-> password";
			}

			echo $mensaje." <a href='javascript:history.back(1)'>";

		}


	}

	function FormularioRegistro2($email,$password,$nombre,$fnac,$genero){

		//echo $genero;

		//echo "->".$nombre."<-";
		//$val_nombre = $this->ValidarNombre($nombre);

		//var_dump($val_nombre);

		if ($this->ValidarFechaNac($fnac)==true) {
			$val_edad=true;
		}
		else{
			$val_edad=false;
		}

		//if ($val_nombre==true && $val_edad==true)
		if ($val_edad==true)
		{



			include_once('ie_Entidades/Usuario.php');
			$Obj = new Usuario;
			$vector = $Obj -> NuevoUsuario($email,$password,$nombre,$fnac,$genero);
			
			$resultReg=$vector[0];
			$ultimo_id=$vector[1];

			if ($resultReg==true) {
				
				//session_start();
				
				$_SESSION['username']= ucwords(strtolower($nombre));
				$_SESSION['id_usuario']=$ultimo_id;
				$_SESSION['tipo_usuario']=0;
				sleep(3);
				header('location:index.php');
				exit;
				//echo "inició sesión correctamente";

			}

			else{
				echo "hubo un error en el registro";
				sleep(2);
				header('location:index.php');
			}

		}

		else{

			$mensaje = "Verifique su: <br>";

			if ($val_nombre==false) {
				$mensaje.="-> Nombre.<br>";
			}
			if ($val_edad==false) {
				$mensaje.="-> Edad.";
			}

			echo $mensaje." <a href='javascript:history.back(1)'>volver</a>";
		}


	}

}

?>