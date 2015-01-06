<?php
$imágenes = new Imagick(glob('img/*.jpg'));

foreach($imágenes as $imagen) {

    // Proporcionar 0 fuerza a thumbnailImage a mantener la proporción de aspecto
    $imagen->thumbnailImage(1024,0);

}

$imágenes->writeImages();

?>