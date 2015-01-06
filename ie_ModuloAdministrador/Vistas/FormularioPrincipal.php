<?php

	/**
	* 
	*/
	include_once('ie_Vistas/Pagina.php');
	class FormularioPrincipal extends Pagina
	{
		
		function MostrarPrincipal($datoUsuario)
		{
			$this-> MostrarEncabezado();
			$this-> MostrarMenu($datoUsuario);
			//$this->ContenidoPaginaPrincipal($entradas);
			$this-> MostrarPie();
			//echo "mostrar panel principal de administrador";
		}
	}

?>