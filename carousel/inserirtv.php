<?php
include "cone.php";
$imagem = $_POST['imagem'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO tecnologias_variaveis (imagem, nome, preco) VALUES ('$imagem', $nome, $preco)";
$conn->query($sql);

header("location: Tecnologia-variaveis.php");