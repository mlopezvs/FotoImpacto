<?php

header('Content-type: image/jpeg');

$imagen = new Imagick('img/foto.jpg');

// Si se proporciona 0 como parámetro de ancho o alto,
// se mantiene la proporción de aspecto
$imagen->thumbnailImage(100, 0);

//echo $imagen;

?>