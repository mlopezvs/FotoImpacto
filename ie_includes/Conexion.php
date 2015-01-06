<?php 

/**
* 
*/
include_once('DataCn.php');
class Conexion extends DataCn
{
	
	function ConectarDB()
	{
		$cn=mysql_connect(DataCn::server,DataCn::user,DataCn::password) or die('error de conexion con server');
		
			$cnDb=mysql_select_db(DataCn::db) or die('verifique la conexion a la bd');

				return $cn;

		


	}

	function CerrarConexion($resultado,$cn){

		mysql_free_result($resultado);
		mysql_close($cn);

	}
}

?>