<?php

phpinfo();

// Create a 100*30 image
$im = imagecreatetruecolor(1200, 630);

// White background and blue text
$bg = imagecolorallocate($im, 0, 151, 167);
$textcolor = imagecolorallocate($im, 255, 255, 255);

// Write the string at the top left
// imagestring($im, 5, 530, 315, 'Hello world!', $textcolor);

$text = "Hello";
putenv('GDFONTPATH=' . realpath('.'));
$font = "/Keyboard.ttf";

imagettftext($im, 20, 0, 10, 20, $textcolor, $font, $text);

// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>
