<?php
$conn = new mysqli("localhost", "root", "", "curso"); 
if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
    exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $senha);

$login = "user";
$senha = "123";

$stmt->execute();

// a partir de $conn é para preparar a conexão com o banco de dados, e da forma apresentada os valores são colocados manualmente 
// a execução ds informações com o banco de dados só acontece quando programa lê o parte do "execute"


?>