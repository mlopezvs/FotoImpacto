<?php
//Instanciar un nuevo objeto Gmagick
$imagen = new Gmagick('img/foto.jpg');

//Hacer una miniatura de una imagen cargada. 0 para los ejes preserva la proporción de aspecto
$imagen->thumbnailImage(100, 0);

//Crear un borde alrededor de la imagen, después simular la imagen para que parezca una pintura al óleo
//Observe el encadenmiento de los métodos mutadores que están soportados en gmagick
$imagen->borderImage("yellow", 8, 8)->oilPaintImage(0.3);

//Escribir la imagen actual en el estado actual de un archivo
$imagen->write('ejemplo_miniatura.jpg');
?>