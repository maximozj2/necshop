<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Eletrodomesticos</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>

        <link href="carousel.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <?php include "cone.php"; ?>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Agradecimentos</h4>
              <p class="text-muted">Andre Correa de Lima<br>
                Bruno Silvera Marques<br>
                Geovanni Metzker Viana<br>
                Mariano Bernardino Bitelo<br>
                Tatiana Medeiros Cardoso</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">NecShop</h4>
              <ul class="list-unstyled">
                <li><a href="../index.html" class="text-white">Home</a></li>
                <br>
                <li><a href="Eletrodomesticos.php" class="text-white">Eletrodomésticos</a></li>
                <li><a href="Computadores.php" class="text-white">Computadores</a></li>
                <li><a href="Tecnologia-variaveis.php" class="text-white">Tecnologias variáveis</a></li>
                <br>
                <li><a href="politica.html" class="text-white">Politicas de privacidade</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/>
            <image src="imagem.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            </svg>
            <strong>NecShop</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
      <br>
      <jujuju><h2>Eletrodomesticos</h2></jujuju>
      <hr>
      <jujuju><h5>inserir um novo produto</h5></jujuju>
      <br>
      <h6>
      <form action="inserirel.php" method="post">
          <label for="imagem">Escolha a imagem:</label>
          Imagem: <input type="file" name="imagem" id="imagem" required>
          Nome: <input type="text" name="nome" required>
          Preco: <input type="number" name="preco" required>

          <button type="submit">Cadastrar</button>
      </form>
      <hr>
      <table border="1">
        <tr><h6><th>ID</th><th>Imagem</th><th>Nome</th><th>Preço</th></h6></tr>
        <?php
        $sql = "SELECT * FROM eletrodomesticos";
        $resultado = $conn->query($sql);
        while ($eletrodomesticos = $resultado->fetch_assoc()) {
            echo "<tr>
              <td>{$eletrodomesticos['ideletrodomesticos']}</td>
              <td><img src='{$eletrodomesticos['imagem']}'></td>
              <td>{$eletrodomesticos['nome']}</td>
              <td>{$eletrodomesticos['preco']}</td>
            </tr>";
          }
        ?>
      </table>
      </h6>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>