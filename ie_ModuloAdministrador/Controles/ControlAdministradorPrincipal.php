<?php 

/**
* 
*/
class ControlAdministradorPrincipal// extends AnotherClass
{
	
	function AbrirControlPrincipal($datoUsuario)
	{
		include_once('ie_Entidades/Entrada2.php');
		$ObjEntrada = new Entrada2;
		$entradas = $ObjEntrada -> Administrador_ObtenerEntradas_Imagen();

		//echo "hora de abrir el modulo administrador";
		include_once('ie_ModuloAdministrador/Vistas/Entradas_FormMostrarEntradasConImagen.php');
		$ObjPrincipal = new Entradas_FormMostrarEntradasConImagen;
		$ObjPrincipal -> AdministradorPaginaPrincipal($entradas);

	}
}

?>