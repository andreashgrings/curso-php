<?php

function error_handler($code, $message, $file, $line) {
 // error_handler trás os códigos com parâmetros de erros, na ordem que são necessários para quem usa   
 echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
    ));
}

set_error_handler("error_handler");
// essa função chama o erro para manipulação do erro

echo 100/0;

// 

?>