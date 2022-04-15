<?php
try {
    throw new exception("Houve um erro", 400);

} catch (Exception $e) {
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
        // os getmessage, line, file, code são métodos que já existem dentro do catch do exception
        // podendo fazer as suas próprias exceptions que vão informar a partir de parâmetros criados pelos desenvolvedor 
    ));

}
// dentro do catch colocar a exception que se quer pegar como erro do try 


?>