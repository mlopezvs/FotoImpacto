<?php

/**
* 
*/
class ControlRecursos //extends AnotherClass
{
	
	   function ValidarEmail($email){ 
	    $mail_correcto = 0; 
	    //compruebo unas cosas primeras 
	    if ((strlen($email)>=6) && (substr_count($email,"@") == 1) && (substr_count($email,".") <= 3) &&(substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
	         if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"|")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
	           //miro si tiene caracter . 
	           if (substr_count($email,".")>= 1){ 
	               //obtengo la terminacion del dominio 
	               $term_dom = substr(strrchr ($email, '.'),1); 
	               //compruebo que la terminación del dominio sea correcta 
	               if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
	                 //compruebo que lo de antes del dominio sea correcto 
	                 $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
	                 $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
	                 if ($caracter_ult != "@" && $caracter_ult != "."){ 
	                     $mail_correcto = 1; 
	                  } 
	               } 
	           } 
	         } 
	    } 
	    if ($mail_correcto) 
	         return true; 
	    else 
	         return false; 
		}//fin de validar email

		function ValidarPassword($dato){

			//compruebo que el tamaño del string sea válido. 
		   	if (strlen($dato)<3 || strlen($dato)>20){ 
		      //echo $dato . " no es válido<br>"; 
		      return false; 
		  	}
			$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_#@.";

		   	for ($i=0; $i<strlen($dato); $i++){ 
		      if (strpos($permitidos, substr($dato,$i,1))===false){ 
		         //echo $dato . " no es válido<br>"; 
		         return false; 
		      }//fin de if 
		   	} 
		   	//echo $dato . " es válido<br>"; 
		   	return true; 		
		}


		function ValidarDatos($dato){
			//echo $da=$dato."->para evaluar";
		   //compruebo que el tamaño del string sea válido. 
		   if (strlen($dato)<3 || strlen($dato)>500){ 
		      //echo $dato . " no es válido<br>"; 
		      //echo "-1-";
		      return false;
		   } 

		   //compruebo que los caracteres sean los permitidos 
		   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZñÑáéíóúÁÉÍÓÚ0123456789_-#@%.,:; "; 
		   for ($i=0; $i<strlen($dato); $i++){ 
		      if (strpos($permitidos, substr($dato,$i,1))===false){ 
		         //echo $dato . " no es válido<br>"; 
		         echo "-2->".substr($dato,$i,1)."<br>"; 
		         return false;
		      }//fin de if 
		   } 
		   	//echo $da." es válido<br>"; 
		   return true; 
	   }

		function ValidarNombre($dato){
			$da=$dato;
			echo $da."->";
		   //compruebo que el tamaño del string sea válido. 
		   if (strlen($dato)<3 || strlen($dato)>500){ 
		      //echo $dato . " no es válido<br>"; 
		      //echo "-1-";
		      return false;
		   } 

		   //compruebo que los caracteres sean los permitidos 
		   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZñÑáéíóúÁÉÍÓÚ0123456789' "; 
		   for ($i=0; $i<strlen($dato); $i++){
		   		echo substr($dato,$i,1)."<br>"; 
		      if (strpos($permitidos, substr($dato,$i,1))===false){ 
		         //echo $dato . " no es válido<br>"; 
		         echo "-2-"; 
		         return false;
		      }//fin de if 
		   } 
		   	//echo $da." es válido<br>"; 
		   return true; 
	   }	   

		function urls_amigables($url) {
			
			//$url = utf8_encode($url);

			$url = strtolower($url);

			$find = array("á", 'é', 'í', 'ó', 'ú', 'ñ');
			$repl = array("a", 'e', 'i', 'o', 'u', 'n');
			$url = str_replace ($find, $repl, utf8_encode($url));


			$find = array(' ', '&', '\r\n', '\n', '+'); 
			$url = str_replace ($find, '-', $url);

			$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
			$repl = array('', '-', '');
			$url = preg_replace ($find, $repl, $url);

			return $url;
		}

		function FechaHoraActual(){

			date_default_timezone_set('America/Lima');
   			$hora = gettimeofday(true);
   			//$h=date("Y-m-d", $hora);
   			return $hora;

		}


		function ValidarErrorImagen($error_img,$mensaje){


			if ($error_img>0) {

				   switch ($error_img){
		                   case 1:  $mensaje .="-> La imagen sobrepasa el limite autorizado por el servidor.<br/>";
		                   // UPLOAD_ERR_INI_SIZE
		                   //$mensaje="La imagen sobrepasa el limite autorizado por el servidor(archivo php.ini) !";
		                   break;

		                   case 2: // UPLOAD_ERR_FORM_SIZE
		                   $mensaje.= "-> La imagen sobrepasa el limite autorizado en el formulario HTML.<br/>";
		                   break;

		                   case 3: // UPLOAD_ERR_PARTIAL
		                   $mensaje.= "-> El envío de la imagen ha sido suspendido durante la transferencia.<br/>";
		                   break;

		                   default: 
						   $mensaje.= "-> Ha ocurrido un error al cargar la imagen, vuelva a intentarlo<br/>";
		          }
		      }
		      echo "error";
		      //$this -> MostrarMensaje_error($mensaje);   
	}//fin de funcion

	function ValidarFechaNac($fnac){
		
		//1989-05-26
	  	$anio = substr($fnac,-10,4);
	  	$mes  = substr($fnac,-5,2);
	  	$dia  = substr($fnac,-2,2);

	  	//echo $dia;
	  	//obtener año actual

	  	$anio_up = date('Y');
	  	settype($anio_up, 'int');
	  	
	  	$anio_min = $anio_up-80;
	  	$anio_max = $anio_up-8;

	  	if ($anio>=$anio_min && $anio<=$anio_max) {
	  		
	  		if($mes>=1 && $mes<=12){

	  			if ($dia>=1 && $dia <= $this->ValNumDias($anio,$mes)) {
	  				//echo "ok";
	  				return true;

	  			}//fin de validar numero de días
	  			else{
	  				//echo "fuera de dia";
	  				return false;
	  			}

	  		}//fin de validacion de mes
	  		else{
	  			//echo "fuera de mes";
	  			return false;
	  		}

	  	}//fin de validar anio
	  	else{
	  		//echo "fuera de anio";
	  		return false;		
	  	}
	  	

	  }//fin de function ValidarFecha

	  function ValNumDias($anio,$mes){

	  	switch ($mes) {
	  		case 1:case 3: case 5: case 7: case 8: case 10: case 12: $dias_limit=31;break;
	  		case 4: case 6: case 9: case 11: 						 $dias_limit=30; break;

	  		case 2: if ($anio%400==0 || ($anio%100!=0 && $anio%4==0) ) {
	  					$dias_limit = 29;
	  					}
	  				else{
	  					$dias_limit= 28;
	  				} 
	  				break;		  		
	  		default:
	  			echo "hubo una dificultad al guardar el día";
	  			break;
	  	}//fin de switch

	  	return $dias_limit;

	  }//fin de function			
}

?>