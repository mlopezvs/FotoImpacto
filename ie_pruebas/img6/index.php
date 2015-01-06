<?php
// Archivo y rotación
$nombre_archivo = 'img/foto.jpg';
$grados = 10;

// Tipo de contenido
header('Content-type: image/jpeg');

// Cargar
$origen = imagecreatefromjpeg($nombre_archivo);

// Rotar
$rotar = imagerotate($origen, $grados, 0);

// Imprimir
imagejpeg($rotar);

// Liberar la memoria
imagedestroy($origen);
imagedestroy($rotar);
?>