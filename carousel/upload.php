<?php
include "cone.php"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $target_dir = "uploads/"; // Pasta onde a imagem será salva
  $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Verifica se o arquivo é uma imagem
  $check = getimagesize($_FILES["imagem"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "O arquivo não é uma imagem.";
    $uploadOk = 0;
  }

  // Verifica se o arquivo já existe
  if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
  }

  /* Verifica o tamanho do arquivo (opcional)
  if ($_FILES["imagem"]["size"] > 500000) {
    echo "Desculpe, o arquivo é muito grande.";
    $uploadOk = 0;
  }
*/
  /* Permite certos formatos de arquivo (opcional)
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Desculpe, apenas JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
  }
*/
  // Verifica se $uploadOk é definido como 0 por algum erro
  if ($uploadOk == 0) {
    echo "Desculpe, o arquivo não foi enviado.";
  // Se tudo estiver ok, tenta fazer o upload do arquivo
  } else {
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
      echo "O arquivo ". htmlspecialchars( basename( $_FILES["imagem"]["name"])). " foi enviado.";
    } else {
      echo "Desculpe, houve um erro ao enviar o arquivo.";
    }
  }
$imagem = $_POST['imagem'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO eletrodomesticos (imagem, nome, preco) VALUES ('$imagem', '$nome', '$preco')";
$conn->query($sql);

header("location: Eletrodomesticos.php");
}
?>