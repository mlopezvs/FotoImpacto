<?php

include_once('ie_Vistas/Pagina.php');
class FormularioRegistrarUsuario extends Pagina
{

	function MostrarFormularioRegistrarUsuario($usuario){

		$this->MostrarEncabezado();
		$this->MostrarMenu($usuario);
		$this->MostrarFormularioRegistro(); 
		$this->MostrarPie();
	}

	function MostrarFormularioRegistrarUsuario2($email,$password,$usuario){

		$this->MostrarEncabezado();
		$this->MostrarMenu($usuario);
		$this->MostrarFormularioRegistro2($email,$password); 
		$this->MostrarPie();
	}	

	
	function MostrarFormularioRegistro(){
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
					<div class="alert alert-info">
					<p class="lead">Impactoe</p>
					<hr>
						<form class="form-horizontal" method="POST" action="registro.php" role="form">

						  <div class="input-group col-md-6 col-md-offset-3  col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" name="email" autofocus class="form-control" placeholder="email">
						  </div>

						  <div class="input-group col-md-6 col-md-offset-3  col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" name="password" class="form-control" placeholder="Password">
						  </div>
						  <br>
						  <div class="form-group">
						    <div class="col-md-offset-4 col-md-3  col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						      <button type="submit" name="registro" class="btn btn-primary btn-lg">Regístrate</button>
						    </div>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>	

		<?php
	}

	function MostrarFormularioRegistro2($email,$password){
		?>

<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
					<div class="alert alert-info">
					<p class="lead">Que buen momento, solo unos detalles más...</p>
					<hr>
						<form class="form-horizontal" method="POST" action="registro.php" role="form">
		<!-- 				  <div class="form-group">
						    <label class="col-sm-3 autofocus control-label">Nombres</label>
						    <div class="col-sm-8">
						      <input type="text" name="nombre" class="form-control" placeholder="nombre y apellido">
						    </div>
						  </div> -->

						  <div class="input-group col-md-6 col-md-offset-3  col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" name="nombre" autofocus="autofocus" class="form-control" placeholder="nombre y apellido">
						  </div>

            <?php
                $anio_up = date('Y');
                settype($anio_up, 'int');
                
                $anio_min = $anio_up-80;
                $anio_max = $anio_up-8;

                $f_min = "$anio_min-01-01";
                $f_max = "$anio_max-12-31";

            ?>						  

						  <div class="input-group col-md-6 col-md-offset-3  col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="date" min="<?php echo $f_min?>" required max="<?php echo $f_max?>" name="fnac" class="form-control" placeholder="1989-05-26">
						  </div>

<!-- 						  <div class="form-group">
						    <label class="col-sm-3 control-label">Edad</label>
						    <div class="col-sm-8">
						      <input type="number" min="8" max="80" name="edad" class="form-control" placeholder="edad">
						    </div>
						  </div> -->

						  <div class="form-group">
						    <!--<label class="col-sm-3 control-label">Eres</label>-->
						    <div class="col-sm-8 col-md-offset-3  col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						     
						     <div class="radio">
							  <label>
							  <div class="col-md-6">
							    <input type="radio" checked="" name="genero" value="m"> Masculino
							  </div>
							  <div class="col-md-6">
							    <input type="radio" name="genero" value="f"> Femenino							    
							  </div>
							  </label>
							</div>

						    </div>
						  </div>

						  <input type="hidden" name="email" value="<?php echo $email?>">
						  <input type="hidden" name="password" value="<?php echo $password?>">

						  <div class="form-group">
						    <div class="col-md-offset-5 col-md-3  col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						      <button type="submit" name="registro2" class="btn btn-primary btn-lg">Entra</button>
						    </div>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>			
		<?php
	}	
}

?>