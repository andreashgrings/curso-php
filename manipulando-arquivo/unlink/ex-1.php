<?php
$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");
// unlink é usado para remover arquivos

echo "Arquivo removido com sucesso";


?>