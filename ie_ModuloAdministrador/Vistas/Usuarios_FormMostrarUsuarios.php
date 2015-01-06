<?php

/**
* 
*/
include_once('../ie_Vistas/Pagina.php');
class Usuarios_FormMostrarUsuarios extends Pagina
{
	
	function MostrarUsuarios($usuarios,$DatosUsuario)
	{
		//echo "hola, ya llegué a la vista desde el control obtener entradas";
		$this-> MostrarEncabezado2();
		$this-> MostrarMenu2($DatosUsuario);	
		$this-> MostrarListaDeUsuarios($usuarios);
		$this-> MostrarPie();
	}

	function MostrarListaDeUsuarios($usuarios){

	?>	
	<br>
	<br>
  <div class="container">
    
<div class="row">
  

  <div class="col-md-10 col-md-offset-1">
<div class="alert alert-warning">
    
    <div class="clearfix">
      <div class="form-inline">
      	<div class="form-group">
      		<h2>Usuarios</h2>
       	</div>
<!--        	<div class="form-group">
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-warning" href="IndexNuevaEntrada.php">Añadir Nueva</a>	
       	</div> -->
      </div>
     <br/>
     <br/>
<div class="table-responsive">
      <table class="table table-hover table-striped text-left entradas">
      <thead>
        <tr>
      	
	      	<th>Ítem</th>
	      	<th>Nombre</th>
          <th>Género</th>
	        <th>tipo usuario</th>
          <th>Estado</th>
          	<th>Acciones</th>
        
      	</tr>
      </thead>
      <tbody>
      <tr>
      </tr>
  <?php

  if($usuarios!=0){

    $i=0;
      while($row=mysql_fetch_array($usuarios)){
        //echo "->".$rows;
        $i++;
        $cod=$row['id_usuario'];
        $cod1=serialize($cod);
        $cod2=base64_encode($cod1);

        if ($row['tipo_usuario']==0) {
          $tipo_usuario = "usuario";
          $pintar ='class="warning"';
        }

        elseif ($row['tipo_usuario']==1) {
          $tipo_usuario = "Administrador";
          $pintar ='class="info"';
        }

        if ($row['estado']==1) {
          $estado = "Habilitado";
          $pintar2 ='class="warning"';
        }
        elseif($row['estado']==0){
          $estado = "Bloqueado";
          $pintar2 ='class="danger"';
        }
        ?>
            <tr <?php echo $pintar?>>
            <td><?php echo $i?></td>
            <td><?php echo utf8_encode($row['nombre'])?></td>
            <td><?php echo utf8_encode($row['genero'])?></td>
            <td><?php echo $tipo_usuario ?></td>
            <td <?php echo $pintar2?>><?php echo $estado ?></td>
            <td>

            <form method="POST" action="../ie_ModuloAdministrador/IndexUsuarios.php"> 
      
              <input type="hidden" name="cod" value="<?php echo $cod2?>" />
              <?php
              if ($row['estado']==1) {
                ?>
       <button type="submit" name="deshabilitar"  class="btn btn-warning btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Deshabilitar"> <span class="glyphicon glyphicon-remove"></span></button>    
                <?php
              }
        elseif($row['estado']==0){
          ?>
      <button type="submit" name="habilitar"     class="btn btn-success btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Habilitar"> <span class="glyphicon glyphicon-ok" >          </span></button>
 <button type="submit" name="eliminar"     class="btn btn-danger btn-xs" 
                      onclick="return confirm('Está seguro que desea eliminar la entrada:\n -><?php echo utf8_encode($row['nombre'])?>');"
                      data-toggle="tooltip" data-placement="top" title="Eliminar">  <span class="glyphicon glyphicon-trash"></span></button>       
          <?php
        }      

              else{echo "hubo un error";}
                ?>
              
              
             
             <!--  <button type="submit" name="editar"       class="btn btn-info btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Editar">    <span class="glyphicon glyphicon-edit">         </span></button> -->
              

            </form>
            
            </td>

            </tr>
      <?php     
        }//fin de while
    }//fin de if

      else {
   ?>
    
    <tr>
            <th colspan="5"><?php echo "no hay entradas"?></th>
    </tr>
   <?php
  
      } 



  ?>
      </tbody>
    </table>
    </div><!--fin de table-responsive-->
    </div><!--fin de clear-->
  </div>
  </div><!-- fin de alert-->
</div><!--fin de fila-->	
</div>

	<?php

	}//fin de function
}//fin de class

?>