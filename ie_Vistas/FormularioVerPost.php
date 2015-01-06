<?php

/**
* 
*/
include_once('ie_Vistas/Pagina.php');
class FormularioVerPost extends Pagina
{
	
	function FormularioPost($datos_post,$usuario)
	{
		$this-> MostrarEncabezado();
		?>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=1480200625567787&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<?php
		$this-> MostrarMenu($usuario);
		$this-> MostrarDetallesPost($datos_post);
		$this-> MostrarPie();
	}

	function MostrarDetallesPost($datos_post){
		
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 alert-warning contenedor_principal">
					<br>
					<!--
					<aside>
					<div class="col-md-2">
						<button class="btn btn-default" disabled  title="proximamente" href="">Me gusta</button>
					</div>
					<div class="col-md-offset-8 col-md-2">
						<button class="btn btn-default" disabled title="proximamente" href="">Compartir</button>
					</div>
						<hr class="info">
					</aside>-->		
						<center>
						<br>
							<img class="img-responsive img-thumbnail" src="<?php echo $datos_post[0]['url_imagen'];?>">
						</center>
						<br>
						<p class="lead"><?php echo $datos_post[0]['titulo']?></p>
						<p class="h5"><?php echo $datos_post[0]['descripcion']?></p>

						<hr>
						<p>
						<div class="fb-like" data-href="http://impactoevangelistico.net/impactoe/5/post.php?id=<?php echo $datos_post[0]['id_entrada']?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<!--					<div class="fb-share-button" data-href="http://impactoevangelistico.net/impactoe/5/post.php?id=<?php echo $datos_post[0]['id_entrada']?>" data-layout="button_count"></div>-->
						</p>
						<hr>
						<p class="h4">Comentarios</p>	

						<div class="fb-comments" data-href="http://impactoevangelistico.net/impactoe/5/post.php?id=<?php echo $datos_post[0]['id_entrada']?>" 
								data-numposts="10" 
								data-colorscheme="light">
						</div>	
						
						
				</div>
				<div class="col-md-4">
				<!-- 	<div class="row"> -->
						<div class="col-md-12">
							<div class="alert-info contenedor1"><br>
							<?php
								while ($datos=mysql_fetch_array($datos_post[1])) 
								{
									?>
									<a href="post.php?id=<?php echo $datos['id_entrada']?>">
										<img class="img-responsive img-rounded col-md-6 borde1" src="<?php echo $datos['url_imagen']?>">
									</a>
									<?php
								}
							?>
							</div>
						</div>
				<!-- 	</div> -->
<br>
<br>
				<!-- 	<div class="row"> -->
						<div class="col-md-12">
							<div class="alert-info"><br></div>
						</div>
				<!-- 	</div> -->
				</div>
			</div>
		</div>
		<?php

	}
}

?>