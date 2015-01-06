<?php

class Pagina
{
	
	function MostrarEncabezado()
	{
		?>
		<!DOCTYPE html>
		<html lang="es">
		<head>
			<meta charset="utf-8">

			<title>ImpactoE</title>
			<link rel="stylesheet" type="text/css" href="ie_includes/dist/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="ie_includes/dist/css/bootstrap-theme.min.css">

      <link rel="stylesheet" type="text/css" href="ie_includes/css/estilo_impactoe.css">

          <!-- link de plantilla-
                      <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic|Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
                      <link rel="stylesheet" href="ie_includes/pint/style.css" type="text/css">
                      <link rel="stylesheet" href="ie_includes/pint/colors/default.css" type="text/css">
                      <link rel="stylesheet" href="ie_includes/pint/js/fancybox/source/jquery.fancybox.css" type="text/css">
                      <script src="ie_includes/pint/js/modernizr.js" type="text/javascript">
                      </script>
          <!- / link de plantilla-->

			<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
    		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

			<script type="text/javascript" src="ie_includes/dist/js/bootstrap.min.js"></script>

		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">


		<?php
	}
//para administrador
  function MostrarEncabezado2()
  {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
      <meta charset="utf-8">

      <title>ImpactoE</title>
      <link rel="stylesheet" type="text/css" href="../ie_includes/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../ie_includes/dist/css/bootstrap-theme.min.css">

            <link rel="stylesheet" type="text/css" href="ie_includes/css/estilo_impactoe.css">

      <!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

      <script type="text/javascript" src="../ie_includes/dist/js/bootstrap.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php
  }
//////////////////////////////////////////////////////////////////////////////////////////////
  function MostrarEncabezadoPint(){
    ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="no-js lt-ie9 lt-ie8 lt-ie7" > <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="no-js ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html dir="ltr" lang="en-US" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>Pinfinity Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic|Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="ie_includes/pint/style.css" type="text/css">
    <link rel="stylesheet" href="ie_includes/pint/colors/default.css" type="text/css">
    <link rel="stylesheet" href="ie_includes/pint/js/fancybox/source/jquery.fancybox.css" type="text/css">
    <script src="ie_includes/pint/js/modernizr.js" type="text/javascript">
</script>
    
    <?php
  }

  function MostrarMenuPint(){
    ?>
</head>

<body>
    <header id="header">
        <div class="pre-head show-on-mobile">
            <div class="wrap group">
                <div class="pre-head-wgt group">
                    <aside class="widget group widget_ci_social_widget">
                        <a href="#" class="icn twitter">Twitter</a>
                        <a href="#" class="icn facebook">Facebook</a>
                        <a href="#" class="icn pinterest">Pinterest</a>
                        <a href="#" class="icn youtube">Youtube</a>
                    </aside>

                    <aside class="widget widget_search group">
                        <form action="/" id="searchform2" class="searchform" method="get" role="search">
                            <input size="27" type="text" title="Search" id="s2" class="s" name="s">
                            <a id="searchsubmit2" class="searchsubmit"><img src="images/search.png" alt="GO"></a>
                        </form>
                    </aside>
                </div><!-- .header-wgt -->
            </div>
        </div><!-- .pre-head -->

        <div id="site-head">
            <div class="wrap group">
                <hgroup class="logo">
                    <h1><a href="index.html"><img src="images/dummy/logo.png" alt=""></a></h1>
                </hgroup>

                <div class="header-wgt group">
                    <aside class="widget group widget_ci_social_widget"><a href="#" class="icn twitter">Twitter</a> <a href="#" class="icn facebook">Facebook</a> <a href="#" class="icn pinterest">Pinterest</a> <a href="#" class="icn youtube">Youtube</a></aside>

                    <aside class="widget widget_search group">
                        <form action="/" id="searchform1" class="searchform" method="get" role="search">
                            <input size="27" type="text" title="Search" id="s1" class="s" name="s"> <a id="searchsubmit1" class="searchsubmit"><img src="images/search.png" alt="GO"></a>
                        </form>
                    </aside>
                </div><!-- .header-wgt -->
            </div><!-- .wrap < #header -->
        </div><!-- #site-head -->

        <nav>
            <div class="wrap group">
                <ul id="navigation" class="group">
                    <li class="current_page_item"><a href="index.html">Home</a></li>
                    <li><a href="page.html">Page Template</a></li>
                    <li><a href="page-double.html">Double Width Page</a></li>
                    <li>
                        <a href="#">Post Formats</a>
                        <ul>
                            <li><a href="format-standard.html">Standard Format</a></li>
                            <li><a href="format-image.html">Image Format</a></li>
                            <li><a href="format-gallery.html">Gallery Format</a></li>
                            <li><a href="format-video.html">Video Format</a></li>
                            <li><a href="format-audio.html">Audio Format</a></li>
                            <li><a href="format-quote.html">Quote Format</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- .wrap < nav -->
        </nav>
    </header>    
    <?php
  } 
////////////////////////////////////////////////////// fin de llamadas pint encabezado y menu
	function MostrarMenu($usuario){

		?>
			</head>
		<body>

		<div class="container">
			<div class="row">
				<div class="col-md-3">
          <a href="index.php">
            <img src="ie_includes/img/logo.png">
          </a>
				</div>
          
                    <?php
          //if (gettype($usuario)=="string") {
            # code...
            ?>
        <div class="col-md-offset-1 col-md-4">
        <form method="post" action="index.php" name="form1">
          <input type="hidden" name="envio_foto">
            <a class="enviar-foto" href="#" onclick="document.forms['form1'].submit();return false;" role="button">
              <center><img class="img-responsive zoom2 enviar-foto" src="ie_includes/img/camara3.png"></center>
              <p class="text-center enviar-foto zoom">Envía tu foto</p><!--<span class="glyphicon glyphicon-camera">-->
            </a>

        </form>
        </div>
            <?php
          //}
          ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!--menu-->
<nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Inicio</a>
          <!--<a class="navbar-brand" href="mailto:joe@example.com?subject=feedback" "email me">email me</a>-->
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">

        <?php
        //echo gettype($usuario);

	if (gettype($usuario)=="integer") {
		?>
<!-- 		<ul class="nav navbar-nav">
           	<li class="dropdown">
              <a id="drop1" href="registro.php" role="button" class="dropdown-toggle" >Registro </a>
            </li>
         </ul> -->
         <ul class="nav navbar-nav navbar-right">
         	<li id="fat-menu" class="dropdown">
         		 <a href="sesion.php" id="drop3" role="button" class="dropdown-toggle">Inicie sesión</a>
         	</li>	 
         </ul> 	
		<?php
	}

	elseif (gettype($usuario)=="string") {
		?>
            <form name="form1" action="index.php" method="POST">
                <ul class="nav navbar-nav">
                <li class="alert-warning">
                          <input name="envio_foto" type="hidden">
                          <!--<a href="#" onclick="document.forms['form1'].submit();return false;" class="dropdown-toggle" role="button"><span class="glyphicon glyphicon-camera">
                          </a>-->
                          
                  <!--  <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                            <li role="presentation">
                            <form action="index.php" method="POST" form-control>
                              <button class="btn btn-link" name="envio_foto">Enviar fotografía</button> 
                            </form>
                            </li>
                          </ul>-->
                  
                 </li>
                </ul> 
            </form>
            
        <ul class="nav navbar-nav navbar-right">
       	 	<li id="fat-menu" class="dropdown">
        	 <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Hola <strong><?php echo utf8_encode($usuario)?></strong> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
              	<li role="presentation"><a role="menuitem" tabindex="-1" href="ie_includes/RequestSalir.php">Salir</a></li>
              </ul>
            </li>
        </ul> 
		<?php
	}
	elseif(gettype($usuario)=="array"){
		?>
          <ul class="nav navbar-nav">

          <?php
          	$nombre			= $usuario['nombre']; 
          	$privilegios  	= $usuario['privilegios'];

          ?>

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
              <?php
                 $rows=count($privilegios);
                  for($i=0;$i<$rows;$i++){

              //while ($menu=mysql_fetch_array($privilegios)) {
              	?>
                <li role="presentation">
                <?php //echo $privilegios[$i][0]."<br>->".$privilegios[$i][1]."<br>-->".$privilegios[$i][2]?>
                <a class="btn btn-link" href="<?php echo $privilegios[$i][1]?>"> <?php echo $privilegios[$i][0]?></a>
                </li>
              	<?php
               }
              ?>
              </ul>
            </li>


          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="fat-menu" class="dropdown">

              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Hola <strong><?php echo utf8_encode($nombre)?></strong> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
              	<li role="presentation"><a role="menuitem" tabindex="-1" href="ie_includes/RequestSalir.php">Salir</a></li>
              </ul>
            </li>

          </ul>		

		<?php
	}

	else echo"hubo un error";


        ?>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
    </nav>	 				
					<!--menu-->
				</div>
			</div>
		</div>

		<?php

	}
  //
 function MostrarMenu2($usuario){

    ?>
      </head>
    <body>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="../ie_includes/img/logo.png">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!--menu-->
<nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Inicio</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">

        <?php
        //echo gettype($usuario);

      if(gettype($usuario)=="array"){
    ?>
          <ul class="nav navbar-nav">

          <?php
            $nombre     = $usuario['nombre']; 
            $privilegios    = $usuario['privilegios'];

          ?>

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
              <?php
                 $rows=count($privilegios);
                  for($i=0;$i<$rows;$i++){

              //while ($menu=mysql_fetch_array($privilegios)) {
                ?>
                <li role="presentation">
                <?php //echo $privilegios[$i][0]."<br>->".$privilegios[$i][1]."<br>-->".$privilegios[$i][2]?>
                <a class="btn btn-link" href="../<?php echo $privilegios[$i][1]?>"> <?php echo $privilegios[$i][0]?></a>
<!--                <form action="index.php" method="POST" form-control>
                  <button class="btn btn-link" name="<?php echo $privilegios[$i][1]?>"><?php echo $privilegios[$i][0]?></button>  
                </form> -->
                </li>
                <?php
               }
              ?>
              </ul>


            </li>  

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="fat-menu" class="dropdown">

              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Hola <strong><?php echo utf8_encode($nombre)?></strong> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="../ie_includes/RequestSalir.php">Salir</a></li>
              </ul>
            </li>

          </ul>   

    <?php
  }

  else echo"hubo un error";


        ?>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
    </nav>          
          <!--menu-->
        </div>
      </div>
    </div>

    <?php

  }//fin de menu 2 

  //
 function MostrarMenu3($usuario){

    ?>
      </head>
    <body>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="../ie_includes/img/logo.png">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!--menu-->
<nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Inicio</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">

        <?php
        //echo gettype($usuario);

      if(gettype($usuario)=="array"){
    ?>
          <ul class="nav navbar-nav">

          <?php
            $nombre     = $usuario['nombre']; 
            $privilegios    = $usuario['privilegios'];

          ?>
            <?php
              $rows=count($privilegios);
              for ($i=0; $i < $rows; $i++) { 
                ?>
                
            <li class="dropdown">
              <a id="drop1" href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">    
                <!-- <span class="caret"></span> -->
              </a>              
            </li>
                <?php
              }
            ?>
<!--
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle">Opciones <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
              <?php
                 $rows=count($privilegios);
                  for($i=0;$i<$rows;$i++){

              //while ($menu=mysql_fetch_array($privilegios)) {
                ?>
                <li role="presentation">
                <?php //echo $privilegios[$i][0]."<br>->".$privilegios[$i][1]."<br>-->".$privilegios[$i][2]?>
                <a class="btn btn-link" href="../<?php echo $privilegios[$i][1]?>"> <?php echo $privilegios[$i][0]?></a>
          
                </li>
                <?php
               }
              ?>
              </ul>
            </li> --> 

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="fat-menu" class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Hola <strong><?php echo utf8_encode($nombre)?></strong> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="../ie_includes/RequestSalir.php">Salir</a></li>
              </ul>
            </li>

          </ul>   

    <?php
  }

  else echo"hubo un error";


        ?>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
    </nav>          
          <!--menu-->
        </div>
      </div>
    </div>

    <?php

  }//fin de menu 3


	function MostrarPie(){

		?>

			</body>
		</html>

		<?php

	}

  function __ContenidoPaginaPrincipal2($entradas,$usuario){
    ?>
    
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-12"> -->
        <div id="page">
          <section id="main">
            <div class="wrap group">
                <div id="box-container">
                    <div id="entry-listing" class="group">


                    <!--//-->

        <?php
        while ($entrada = mysql_fetch_array($entradas)) {
?>

                        <article class="post-31 category-music entry box format-audio">
                            <div class="entry-content-cnt">
 

                                <aside class="widget widget_ci_twitter_widget group">
                                    <h3 class="widget-title"><?php echo $entrada['titulo']?></h3>

                                    <div id="twitter_update_list">
                                        <ul>
                                           <img alt="about me" class="alignleft" src="<?php echo $entrada['url_imagen']?>">

                                            <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere tortor. <a href="#">http://www.example.com</a></span> <a href="#" class="twitter-time">about 11 hours ago</a></li>
                                        </ul>
                                    </div>
                                </aside>

                            </div>
                        </article>
          
          <?php
        }
        ?>
        </div>
        </div>
        </div>
        </section>
        </div>
        <!-- </div> -->
      </div>
    </div>
    <?php
  }  

}

?>