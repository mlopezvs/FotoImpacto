<?php

/**
* 
*/
include_once('ie_Vistas/Pagina.php');
class Principal extends Pagina
{
	
	function MostrarPaginaIndex($entradas,$usuario){
		
		$this->MostrarEncabezado();
		$this->MostrarMenu($usuario);
		$this->ContenidoPaginaPrincipal($entradas,$usuario);
		$this->MostrarPie();
	}


	function ContenidoPaginaPrincipal($entradas,$usuario){
		?>
		
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-12"> -->

				<?php
				while ($entrada = mysql_fetch_array($entradas)) {
					//echo $entrada['titulo']."<br>";
	$ruta_imagen = $entrada['url_imagen'];				
	$info_fuente    = getimagesize($ruta_imagen);

	$sx = $info_fuente[0];
	$sy = $info_fuente[1];

					?>
					
					  <div class="col-sm-6 col-md-3">
            <!--<div class="idn">-->
					    <div class="thumbnail">
              <a href="post.php?id=<?php echo $entrada['id_entrada']?>">
              <?php
              if ($sx<$sy) {//cuando es vertical
    //           	@header('Content-type: image/jpeg');
    //           	echo $sx."x".$sy;
    //           	$grados=0;
    //           	$origen = imagecreatefromjpeg($ruta_imagen);
    //           	$rotar = imagerotate($origen, $grados, 0);

    //             // Imprimir
				// imagejpeg($rotar);

				// //Liberar la memoria
				// imagedestroy($origen);
				// imagedestroy($rotar);	
              	?>
              	
              	<?php 
              }
              	else{echo $sx."->".$sy;
              	//ie_imagenes
              	
              	$nombre = substr($entrada['url_imagen'], 12);
              	
              		?>
                <img src="ie_imagenes_thumb/<?php echo $nombre?>" alt="<?php echo $entrada['titulo']?>">
              		
              		<?php
              	}
              ?>
              </a>
					      <div class="caption">
					        <h4><?php echo $entrada['titulo']?></h4>
					        <!--<p><?php echo $entrada['descripcion']?></p>-->
					        <p>
                  <?php
if (gettype($usuario)!="array" && gettype($usuario)!="integer") {
  
  ?>
					        	<!--<a href="#" class="btn btn-default" role="button">me gusta</a>
					        	<a href="#" class="btn btn-primary" role="button">Compartir</a>-->
  <?php
}else{
  ?>
  <!-- <div class="help-block"><?php echo $entrada['estado']?></div> -->

  <?php

}
  
                  ?>
					        </p>
					      </div>
					    </div>
              <!--</div>-->
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