<?php
$file = fopen("log.txt", "w+");
// o w+ é para a criação de texto(writing), enquanto o 
// a+ ele vai acrescentando informações ao que já existe

fwrite($file, date("Y-m-d H:i:s"));

fclose($file);

echo "Arquivo criado com sucesso";
?>