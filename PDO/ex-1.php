<?php
$conn = new PDO("mysql:dbname=curso;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt-> execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
var_dump($results);
?>