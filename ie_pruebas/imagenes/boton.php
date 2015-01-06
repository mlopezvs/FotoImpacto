<?php

header("Content-type: image/png");
$cadena = $_GET['texto'];
$im     = imagecreatefrompng("img/boton.png");
$naranja = imagecolorallocate($im, 220, 210, 60);
$px     = (imagesx($im) - 7.5 * strlen($cadena)) / 2;
$py		= (imagesy($im) - 0.2*strlen($cadena)) /2;
imagestring($im, 3, $px, $py, $cadena, $naranja);
imagepng($im);
imagedestroy($im);

?>