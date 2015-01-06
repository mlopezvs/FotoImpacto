<?php

/**
* 
*/
include_once('ie_Controles/ControlRecursos.php');
class ControlRegistrarPublicacion extends ControlRecursos
{
	function ControlRegistrar($usuario){

		include_once('ie_Vistas/FormularioRegistrarPublicacion.php');
		$ObjFormulario = new FormularioRegistrarPublicacion;
		$ObjFormulario -> MostrarPaginaEnviarFormulario($usuario);
	
	}
	
	function RegistrarPublicacion($error_img,$id_usuario,$usuario)
	{
			$pagina_volver="IndexNuevaEntrada.php";

			$mensaje = "Mensaje: <br>";

				if ($error_img>0) {
					# code...
					$this->ValidarErrorImagen($error_img,$mensaje);
				}
			
			else {
			//echo "Todo está bien<br>";

				$permitidos_img = array("image/jpg", "image/jpeg", "image/gif", "image/png");
				$limite_mb_img  = 20;

				$extension_imagen=	$_FILES['foto']['type'];
				$tamano_imagen   =	$_FILES['foto']['size'];

				if (in_array($extension_imagen, $permitidos_img) && $tamano_imagen <= $limite_mb_img*1024*1024)
				{
					if 	   ($extension_imagen=="image/jpg") 	$ext_img=".jpg";
					elseif ($extension_imagen=="image/jpeg") 	$ext_img=".jpg";
					elseif ($extension_imagen=="image/gif")		$ext_img=".gif";
					elseif ($extension_imagen=="image/png")		$ext_img=".png";
					else   ($ext_img = "error");
					
					$estado=0;

					while ( $estado==0) 
					{
						# code...
						$id_img=rand(10000000,99999999);
					
						switch ($ext_img) {
						case '.jpg': $nombre_archivo_imagen = $id_img.$ext_img; break;
						case '.gif': $nombre_archivo_imagen = $id_img.$ext_img; break;
						case '.png': $nombre_archivo_imagen = $id_img.$ext_img; break;
						
						default:
							echo "error";
						}

						$nombre_imagen	= $_FILES['foto']['name'];
						$ruta_img 		= "ie_imagenes/" . $nombre_archivo_imagen;

						if (!file_exists($ruta_img))
						{
							$lugar_temporal_img  =$_FILES["foto"]["tmp_name"];

							$resultado_img 	= @move_uploaded_file($lugar_temporal_img, $ruta_img);

							if ($resultado_img)
							{	//formMensaje
								$mensaje.="-> Los archivos han sido subidos a servidor exitosamente.<br>";
								
								$url_img = "ie_imagenes/".$nombre_archivo_imagen;
				
								date_default_timezone_set('America/Lima');
								$fecha_registro = gettimeofday(true);

								include_once('ie_Entidades/Imagenes.php');
								$ObjImagenes = new Imagenes;

								$vector	= $ObjImagenes -> RegistarImagen($nombre_archivo_imagen,$nombre_imagen,($tamano_imagen/1024),$extension_imagen,$fecha_registro,$url_img,$id_usuario);

								$rs 			= $vector[0];
								$datos_imagen 	= $vector[1];

									if ($rs==false) {
										$mensaje.="-> Hubo una dificultad al cargar datos de la fotografía, vuelva a intentar, si persiste, comuníquelo al: <br/>Administrador: 991026416, o escriba a: lburgos@impactoevangelistico.net";
										//$this ->MostrarMensaje_error($mensaje,$privilegios);
										echo $mensaje;
									}

									else{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

										$original = imagecreatefromjpeg($datos_imagen['url_imagen']);

										//echo $datos_imagen['nombre_registro']."->".$ancho = imagesx($original);

										$ancho 	= imagesx($original);
										$alto 	= imagesy($original);

										$escala = 300/$ancho;

										$ancho_t = $ancho*$escala;
										$alto_t  = $alto*$escala;
										
										$grados = -90;									//para foto vertical camara trasera
										$thumb = imagerotate($original, $grados, 0);		//para foto vertical para camara delantera o frontal
										
										$thumb = imagecreatetruecolor($ancho_t,$alto_t);
										imagecopyresampled($thumb,$original,0,0,0,0,$ancho_t,$alto_t,$ancho,$alto);//copia la foto al thumb (por eso le da las medidas )
										imagejpeg($thumb,'ie_imagenes_thumb/'.$datos_imagen['nombre_registro'],90); // 90 es la calidad de compresión

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

										$pagina="IndexEntradas.php";
										$mensaje.="-> Registro satisfactorio.";
										//$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
										//echo $mensaje;
										//echo "<br>el id de la imagen es: ".$id_imagen;

										include_once('ie_Vistas/FormularioRegistrarPublicacion.php');
										$ObjRegistrarPublicacion = new FormularioRegistrarPublicacion;
										$ObjRegistrarPublicacion -> MostrarPaginaEnviarFormulario2($datos_imagen,$id_usuario,$usuario);
									}
							} 

							else {
								//formMensaje
								$mensaje.="-> Ocurrio un error al mover la imagen. Vuelva a intentar, si persiste al <br/>Administrador: 991026416, o escriba a: lburgos@impactoevangelistico.net";
								$this ->MostrarMensaje_error($mensaje,$privilegios);
							}

							$estado++;
						}//fin de verificacion si existe un archivo con el mismo nombre

						else {//si es que ya existe un archivo con el mismo nombre
							if (!file_exists($ruta_img)) {
							$mensaje.=''.$nombre_imagen . "<br/>-> ya hay una imagen con el mismo nombre";	
							}
							//formMensaje
							$this -> MostrarMensaje_warning($mensaje,$privilegios);
						}//aqui debajo va el fin del while	

					}//fin de while

				}//fin de if q verifica extension de archivo y tamaño de archivo 

				else {
					//formMensaje
				$mensaje.="<br>Solo está permitido jpg, png y gif, o excede el tamano límite: 5 mb";//en megabytes
				$this -> MostrarMensaje_error($mensaje,$privilegios);
				}
	}//fin de else		
}//fin de funcion RegistrarPublicacion

	function AdjuntarDatosAImagen($titulo, $descripcion, $id_imagen,$url_img,$id_usuario){

		$val_titulo 		= $this->ValidarDatos($titulo);
		$val_descripcion 	= $this->ValidarDatos($descripcion);

		if ($val_titulo==true && $val_descripcion==true) {
			//echo "adjuntar titulo a imagen";

			$titulo_id = $this->urls_amigables($titulo);
			$fecha_registro = $this->FechaHoraActual();
			include_once('ie_Entidades/Entrada.php');
			$ObjEntrada = new Entrada;
			$rs = $ObjEntrada -> RegistarNuevaEntrada($titulo, $titulo_id, $descripcion, $id_imagen, $fecha_registro, $id_usuario);

			if ($rs == true ) {
				//echo "registro excelente,<br>\tRedireccionando al index: en 3, 2, 1 ...";
				//sleep(3);
				header('location: index.php');
			}
			else{
				echo "error en el registro db";
			}

		}
		else{

			$mensaje = "Observaciones en: ";
			
			$obs_titulo	 		= 0;
			$obs_descripcion	= 0;

			if ($val_titulo!=true) {
				//$mensaje .= "<br>-> Titulo";
				$obs_titulo=1;
			}
			if ($val_descripcion!=true) {
				//$mensaje .= "<br>-> Descripcion";
				$obs_descripcion=1;
			}

			 $datos_imagen['id_imagen'] = $id_imagen;
			 $datos_imagen['url_imagen']= $url_img;

			//include_once('ie_Vistas/FormularioRegistrarPublicacion.php');
			//$ObjFormRegPublicacion = new FormularioRegistrarPublicacion;
			//$ObjFormRegPublicacion -> MostrarPaginaEnviarFormulario2_Obs($datos_imagen,$id_usuario,$usuario);
			


			

		}

	}

}

?>