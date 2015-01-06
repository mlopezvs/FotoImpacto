<?php

include_once('ie_Vistas/Pagina.php');
class FormularioRegistrarPublicacion extends Pagina
{

	function  MostrarPaginaEnviarFormulario($usuario){

		$this->MostrarEncabezado();
		?>
		<script type="text/javascript" src="ie_includes/js/verificar.js"></script>
		<?php
		$this->MostrarMenu($usuario);
		$this->MostrarFormularioPublicacion($usuario);
		$this->MostrarPie();

	}

		function  MostrarPaginaEnviarFormulario2($datos_imagen,$id_usuario,$usuario){

		$this->MostrarEncabezado();
		$this->MostrarMenu($usuario);
		$this->MostrarFormularioPublicacion2($datos_imagen,$id_usuario,$usuario);
		$this->MostrarPie();

	}

	// 	function  MostrarPaginaEnviarFormulario2_Obs($datos_imagen,$id_usuario,$usuario){

	// 	$this->MostrarEncabezado();
	// 	$this->MostrarMenu($usuario);
	// 	$this->MostrarFormularioPublicacion2_Obs($datos_imagen,$id_usuario,$usuario);
	// 	$this->MostrarPie();

	// }			

	
	function MostrarFormularioPublicacion($usuario)
	{
?>		
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">

					<div class="alert alert-info">
					<p class="lead">que bueno, publica tu foto...!!!</p>
					<hr>
						<form class="form-horizontal" method="POST" name="formulario_publicacion" action="index.php" role="form" enctype="multipart/form-data" onsubmit='verificarimagen(); return false'>
						  
						  <input type="hidden" name="foto" value="1">
						  <div class="input-group col-md-6 col-md-offset-3">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-camera"></span>
							</span>
							<input type="file" name="foto" accept="image/jpg, image/jpeg, image/gif,image/png" class="form-control btn btn-warning" onchange="this.form.submit()">
						  </div>

<!-- 						  <div class="form-group">
						    <label class="col-sm-3 control-label">glyphicon glyphicon-camera</label>
						    <div class="col-sm-8">
						      <input type="file" name="foto" accept="image/jpg, image/jpeg, image/gif,image/png" class="form-control btn btn-warning">
						    </div>
						  </div> -->


						</form>
					</div>

				
			</div>
		</div>
	</div>

<?php
	}

	function MostrarFormularioPublicacion2($datos_imagen,$id_usuario,$usuario){
		//echo $datos_imagen['url_imagen'];

		?>
	
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">

			<div class="alert alert-info">
				<p class="lead">Ya estamos listo, solo unos detalles</p>
				<hr>

				<form action="index.php" method="POST" class="form-horizontal">

				<div class="row">
					
					<div class="col-md-8 col-sm-12">
					  <div class="form-group">
					    <label class="col-md-3 col-sm-3 control-label">Título</label>
					    <div class="col-md-9 col-sm-9">
					      <input type="text"  name="titulo" class="form-control" placeholder="titulo">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-md-3 col-sm-3 control-label">Descripción</label>
					    <div class="col-md-9 col-sm-9">
					      <textarea name="descripcion"  rows="3" class="form-control" placeholder="aquí escriba una descripción"></textarea>
					    </div>
					  </div>
					</div>

					<div class="col-md-4 col-sm-12">
					  <div class="form-group">
					  	<!--<label class="col-md-12 col-sm-12 control-label">Fotografía</label>-->
					  	<div class="col-md-12 col-sm-12">
					  		<img class="img-responsive img-thumbnail" src="<?php echo $datos_imagen['url_imagen']?>">
					  	</div>
					  </div>

						<!-- <img class="img-thumbnail" src="<?php echo $datos_imagen['url_imagen']?>"> -->
						<br>
						<div align="center">
						<br>
							<input type="hidden" name="url_imagen" value="<?php echo $datos_imagen['url_imagen']?>">
							<input type="hidden" name="id_imagen" value="<?php echo $datos_imagen['id_imagen']?>">
					    	<button type="submit" name="cancelar" class="btn btn-default btn-sm">Cancelar</button>
					      	<button type="submit" name="registrar_foto" class="btn btn-primary btn-sm">Enviar</button>
						</div>
					</div>
				</div>

					<br>

			    <div class="row">
				    <div class="col-md-9 col-md-offset-3">
				    	
				    </div>
			    	
			    </div>
					
					
				</form>
			</div>
		</div>
	</div>
</div>	

		<?php
	}

	// function MostrarFormularioPublicacion2_Obs($datos_imagen,$id_usuario,$usuario){
		
	// }
}

?>