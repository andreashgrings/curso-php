<?php

$conn = new PDO("mysql:dbname=CURSO;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK!";

?>