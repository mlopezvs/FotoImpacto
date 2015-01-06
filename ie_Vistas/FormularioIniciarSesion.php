<?php

include_once('ie_Vistas/Pagina.php');
class FormularioIniciarSesion extends Pagina
{

	function MostrarFormularioIniciarSesion($usuario){

		$this->MostrarEncabezado();
		$this->MostrarMenu($usuario);
		$this->MostrarFormulario(); 
		$this->MostrarPie();

	}
	
	function MostrarFormulario(){
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
					<div class="alert alert-warning">
					<p class="lead">Entra a Impactoe</p>
					<hr>
						<form class="form-horizontal" method="POST" action="sesion.php" role="form">
						  <div class="input-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" name="email" autofocus class="form-control" placeholder="email">
						  </div>

						  <div class="input-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" name="password" class="form-control" placeholder="Password">
						  </div>
						  <br>
						  <div class="form-group">
						    <div class="col-md-offset-4 col-md-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						      <button type="submit" name="iniciar_sesion" class="btn btn-warning btn-lg">Iniciar sesión</button>
						    </div>
						  </div>
						  <hr>
						  <p class="text-center">o tambien puedes:</p>
						  <p class="text-center"><a class="btn btn-primary" href="registro.php">Registarte</a></p>

						</form>
					</div>
				</div>
			</div>
		</div>

		<?php
	}
}

?>