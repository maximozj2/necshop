<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bancoss";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn -> connect_error) {
    die("erro de conexão: " . $conn -> connect_error);
}
?>