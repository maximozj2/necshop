<?php
include "cone.php";
$imagem = $_POST['imagem'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO computadores (imagem, nome, preco) VALUES ('$imagem', $nome, $preco)";
$conn->query($sql);

header("location: Computadores.php");