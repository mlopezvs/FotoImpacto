<?php

/**
* 
*/
include_once('../ie_Vistas/Pagina.php');
class Entradas_FormMostrarEntradas extends Pagina
{
	
	function MostrarEntradas($entradas,$usuario)
	{
		//echo "hola, ya llegué a la vista desde el control obtener entradas";
		$this-> MostrarEncabezado2();
		$this-> MostrarMenu2($usuario);	
		$this-> MostrarListaDeEntradas($entradas);
		$this-> MostrarPie();
	}

	function MostrarListaDeEntradas($entradas){

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
      		<h2>Entradas</h2>
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
	      	<th>Título</th>
	      	<th>Descripción</th>
          <th>Gráfico</th>
	      	<th>Estado</th>
          	<th>Acciones</th>
        
      	</tr>
      </thead>
      <tbody>
      <tr>
      </tr>
  <?php

  if($entradas!=0){

    $i=0;
      while($row=mysql_fetch_array($entradas)){
        //echo "->".$rows;
        $i++;
        $cod=$row['id_entrada'];
        $cod1=serialize($cod);
        $cod2=base64_encode($cod1);

        if ($row['estado']==2) {
          $estado = "No evaludao";
          $pintar ='class="info"';
        }

        elseif ($row['estado']==1) {
          $estado = "Publicado";
          $pintar ='class="warning"';
        }
        else{
          $estado = "No Publicado";
          $pintar ='class="danger"';
        }
        ?>
            <tr <?php echo $pintar?>>
            <td><?php echo $i?></td>
            <td><?php echo utf8_encode($row['titulo'])?></td>
            <td><?php echo utf8_encode($row['descripcion'])?></td>
            <td width="20%"><a target="_blank" href="../<?php echo $row['url_imagen']?>"><img class="img-responsive" src="../<?php echo $row['url_imagen']?>"></a></td>
            <td><?php echo $estado ?></td>
            <td>

            

            <form method="POST" action="../ie_ModuloAdministrador/IndexEntradas.php"> 
      
              <input type="hidden" name="url_img" value="<?php echo $row['url_imagen']?>">
              <input type="hidden" name="cod" value="<?php echo $cod2?>" />
              <?php
              if ($row['estado']==2) {
                ?>
<button type="submit" name="publicar"     class="btn btn-success btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Publicar"> <span class="glyphicon glyphicon-ok" >          </span></button>       
<button type="submit" name="despublicar"  class="btn btn-warning btn-xs"
                      data-toggle="tooltip" data-placement="top" title="No Publicar"> <span class="glyphicon glyphicon-remove"></span></button>    
                <?php
              }

              elseif($row['estado']==1){
                ?>
              <button type="submit" name="despublicar"  class="btn btn-warning btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Despublicar"> <span class="glyphicon glyphicon-remove"></span></button>
                <?php
              }

              elseif($row['estado']==0){
                ?>
              <button type="submit" name="publicar"     class="btn btn-success btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Publicar"> <span class="glyphicon glyphicon-ok" ></span></button>
              <button type="submit" name="eliminar"     class="btn btn-danger btn-xs" 
                      onclick="return confirm('Está seguro que desea eliminar la entrada:\n -><?php echo utf8_encode($row['titulo'])?>');"
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