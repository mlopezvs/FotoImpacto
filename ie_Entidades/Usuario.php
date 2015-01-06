<?php

/**
* 
*/
include_once('ie_includes/Conexion.php');
class Usuario extends Conexion
{
	
	function NuevoUsuario($email,$password,$nombre,$fecha_nacimiento,$genero)
	{
		
		$cn = $this->ConectarDB();

		$consulta = "INSERT INTO ie_usuario (email,password,nombre,edad,genero,fecha_nacimiento) values ('$email','$password','$nombre','$edad','$genero','$fecha_nacimiento')";
		$resultado = mysql_query($consulta,$cn);
//var_dump($resultado);
		
		$ultimo_id = mysql_insert_id($cn);
		$vector[0]=$resultado;
		$vector[1]=$ultimo_id;

		return $vector;

		$this->CerrarConexion($vector,$cn);

	}

	function VerificarRegistrarUsuario($email){

		$cn = $this -> ConectarDB();

		$consulta = "SELECT nombre from ie_usuario where email='$email' and estado='1'";
		$resultado = mysql_query($consulta,$cn);

		$num = mysql_num_rows($resultado);

		if ($num!=0){
			return 0;
		}
		
		else{
			return 1;
		}	
	}

	function AutenticarUsuario($email,$password){

		$cn = $this -> ConectarDB();

		$consulta = "SELECT id_usuario from ie_usuario where email='$email' and estado='1'";
		$resultado = mysql_query($consulta,$cn);

		$num = mysql_num_rows($resultado);

		if ($num==1){
			
			$consulta2  = "SELECT id_usuario,nombre,tipo_usuario from ie_usuario where email='$email' and password='$password' and estado='1'";
			$resultado2 = mysql_query($consulta2,$cn);

			$num2=mysql_num_rows($resultado2);
			if ($num2==1) {
				//echo "Mostrar formulario Principal";

			$r=mysql_fetch_array($resultado2);

				$id_usuario		= $r['id_usuario'];
				$nombre 		= $r['nombre'];
				$tipo_usuario 	= $r['tipo_usuario'];

				$_SESSION['username']    = $nombre;
				$_SESSION['id_usuario']  = $id_usuario;
				$_SESSION['tipo_usuario']= $tipo_usuario;
				//header('location:index.php');

				$vector['id_usuario'] 	= $id_usuario;
				$vector['nombre'] 		= $nombre;
				$vector['tipo_usuario'] = $tipo_usuario;

				return $vector;

			}

			else{
				
				return 1;
			}
		
		$this -> CerrarConexion($vector,$cn);		
			
		}//fin de $num!=0

		else{
			
			return 0;
		}
			
	}//fin de function AutenticarUsuario

	function ObtenerPrivilegios($id_usuario){

		$cn = $this-> ConectarDB();
					
			$consulta 	="SELECT * FROM ie_operacion inner join ie_usuario_operacion on ie_operacion.id_operacion = ie_usuario_operacion.id_operacion WHERE  ie_usuario_operacion.estado=1 && ie_usuario_operacion.id_usuario='$id_usuario'";
			$resultado 	=mysql_query($consulta,$cn);
			if($resultado==false) echo"<br>--->888<---";
			else return($resultado);	
					
		$this -> CerrarConexion($resultado,$cn);

	}
}

?>