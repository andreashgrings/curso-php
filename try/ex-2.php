<?php

function trataNome($name) {
    if(!$name) {
        throw new Exception("Nenhum nome foi informado", 1);
    }
    echo ucfirst($name)."<br>";
}

try {
    trataNome("João");
    trataNome("");
    // nesta segunda linha aparece o erro por não haver sido informado algum nome
} catch(Exception $e) {
    echo $e->getMessage();

} finally {
    echo "Executou o Try!";
    // o bloco do finally é executado por último, como o próprio nome indica
}

?>