<?php 
echo date("d/m/Y");
// ano fica com "Y" maíusculo para diferenciar

echo "<br>";
date_default_timezone_set("America/Sao_Paulo");

echo date("d/m/Y H:i:s");
// para minuto se usa a letra "i" por já ter a letra "m" representando "mês" e a segunda letra de minuto ser o "i"
 echo "<br>";
 echo time();
// Dá o tempo medido em segundos a partir do ano de 1970

$ts = strtotime("2001-09-11");
// ts é a redução de Time Stamp e "strto time" é a redução de string to time
echo "<br>";

echo date("l, d/m/Y", $ts);
//  o "l" representa o dia da semana


?>
