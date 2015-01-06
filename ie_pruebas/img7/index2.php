<?php  

$im      = $_GET['im']; 
$maxsize = $_GET['maxsize']; 
if (strpos($im,"gif")==false){ 


             
if ($maxsize == '') { 
    $maxsize = 100; 
} 

// The file 
$filename = $im; 

// Set a maximum height and width 
$width  = $maxsize; 
$height = $maxsize; 

// Content type 
header('Content-type: image/jpeg'); 

// Get new dimensions 
list($width_orig, $height_orig) = getimagesize($filename); 

if ($width && ($width_orig < $height_orig)) { 
    $width = ($height / $height_orig) * $width_orig; 
} else { 
    $height = ($width / $width_orig) * $height_orig; 
} 

// Resample 
$image_p = imagecreatetruecolor($width, $height); 
$image   = imagecreatefromjpeg($filename); 
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig); 

// Output 
imagejpeg($image_p); 
imagedestroy($image); 
imageDestroy($image_p); 

} 
//------------------------------------------------------------------   gif 
else 
{ 




             
if ($maxsize == '') { 
    $maxsize = 100; 
} 

// The file 
$filename = $im; 

// Set a maximum height and width 
$width  = $maxsize; 
$height = $maxsize; 

// Content type 
  Header("Content-type: image/gif");  

// Get new dimensions 
list($width_orig, $height_orig) = getimagesize($filename); 

if ($width && ($width_orig < $height_orig)) { 
    $width = ($height / $height_orig) * $width_orig; 
} else { 
    $height = ($width / $width_orig) * $height_orig; 
} 

// Resample 
$image_p = imagecreatetruecolor($width, $height); 
$image   = imagecreatefromgif($filename); 
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig); 

// Output 
 imageGif($image_p); 
imagedestroy($image); 
imageDestroy($image_p); 
$fuente = @imagecreatefromgif($im); 
            
     
        
} 
?>