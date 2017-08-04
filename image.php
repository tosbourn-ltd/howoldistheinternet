<?php

$im = imagecreatefrompng('sharing.png');

$textcolor = imagecolorallocate($im, 255, 255, 255);

$text = "12";
// points toward the font path 
putenv('GDFONTPATH=' . realpath('.'));
$font = "/Keyboard.ttf";

imagettftext($im, 150, 0, 350, 400, $textcolor, $font, $_GET['text']);

// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>
