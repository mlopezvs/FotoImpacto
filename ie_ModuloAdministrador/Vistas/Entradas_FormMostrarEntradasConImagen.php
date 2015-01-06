<?php

/**
* 
*/
include_once('ie_Vistas/Pagina.php');
class Entradas_FormMostrarEntradasConImagen extends Pagina
{
	
	function AdministradorPaginaPrincipal($entradas){
		?>
		
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-12"> -->

				<?php
				while ($entrada = mysql_fetch_array($entradas)) {
					//echo $entrada['titulo']."<br>";
					?>
					
					  <div class="col-sm-6 col-md-3">
					    <div class="thumbnail">
					      <img src="<?php echo $entrada['url_imagen']?>" alt="<?php echo $entrada['titulo']?>">
					      <div class="caption">
					        <h4><?php echo $entrada['titulo']?></h4>
					        <p><?php echo $entrada['descripcion']?></p>
					        <p>
					        	<a href="#" class="btn btn-default" role="button">No me gusta</a>
					        	<a href="#" class="btn btn-primary" role="button">Compartir</a>
					        </p>
					      </div>
					    </div>
					  </div>
					
					<?php
				}
				?>
		
				
				<!-- </div> -->
			</div>
		</div>



		<?php
	}
}

?>