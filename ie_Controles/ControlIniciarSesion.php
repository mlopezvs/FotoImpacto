<?php


include_once('ie_Controles/ControlRecursos.php');
class ControlIniciarSesion extends ControlRecursos
{
	
	function IniciarSesion($usuario){

		include_once('ie_Vistas/FormularioIniciarSesion.php');
		$ObjIniciarSesion = new FormularioIniciarSesion;
		$ObjIniciarSesion -> MostrarFormularioIniciarSesion($usuario);

	}

	function ValidarSesion($email,$password){

		$val_email 		= $this-> ValidarEmail($email);
		$val_password 	= $this->  ValidarPassword($password);

		if ($val_email == true && $val_password==true) {
			
			include_once('ie_Entidades/Usuario.php');
			$ObjRegistro = new Usuario;
			$resultado = $ObjRegistro -> AutenticarUsuario($email,$password);
			//echo $resultado['tipo_usuario'];
			if(isset($resultado['tipo_usuario'])) {

				if ($resultado['tipo_usuario']==0) {

					include_once('ie_Controles/ControlPrincipal.php');
					$ObjControl = new ControlPrincipal;
					$ObjControl -> ControlPaginaPrincipal($resultado['nombre']);

				}
				elseif ($resultado['tipo_usuario']==1) {

					include_once('ie_Entidades/Usuario.php');
					$ObjUsuario = new Usuario;
					$registros = $ObjUsuario -> ObtenerPrivilegios($resultado['id_usuario']);

					$filas=mysql_num_rows($registros);
						for($i=0;$i<$filas;$i++)
							{
								$fila=mysql_fetch_array($registros);
								$privilegios[$i][0]=$fila['descripcion'];
		            			$privilegios[$i][1]=$fila['url_operacion'];
		            			$privilegios[$i][2]=$fila['nombre_btn'];
		                                               						
							}

						$_SESSION['username']		= $resultado['nombre'];
						$_SESSION['privilegios']	= $privilegios;

						//var_dump($_SESSION['privilegios']);

					$datoUsuario['nombre']		= $resultado['nombre'];
					$datoUsuario['privilegios']	= $privilegios;

					// include_once('ie_ModuloAdministrador/Controles/ControlPrincipal.php');
					// $ObjControl = new ControlPrincipal;
					// $ObjControl -> AbrirControlPrincipal($datoUsuario);
					header('location:index.php');
				}

				else{
					echo "ocurrio un error";
					header('location: index.php');
				}

			}

			elseif ($resultado==1) {
				echo "vuelva a intentar, usuario o password incorrecto<a href='javascript:history.back(1)'>volver</a>";
			}

			elseif($resultado==0){
				echo "usuario no registro, <a href='javascript:history.back(1)'>volver</a>";
			}


		}

			else{
			echo "verifique sus datos, <a href='javascript:history.back(1)'>volver</a>";
		}

	}//fin de funcion
}

?>