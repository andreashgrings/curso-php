<?php

// header("Content-Type: image/png");

$image = imagecreate(500, 500);
//Com o imagecreate é uma função que se usa pra criar as dimensões da imagem

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);
// Imagecolorallocate é para definir as cores que vão ser usadas no padrão RGB

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);
// imagepng define qual o formato da imagem

imagedestroy($image);
// no meu Chrome não apareceu a imagem

?>
