<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login GOVBR</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #dff3e4, #35a249);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      color: #228B22;
    }

    input, select {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #35a249;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2e8b45;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Bem-vindo</h2>
    <p>Utilize para fazer LOGIN seu e-mail e senha<br>respectivos do gov.</p>
    
    <select id="perfil">
      <option value="aluno">Aluno</option>
      <option value="professor">Professor</option>
    </select>
    
    <input type="email" id="email" placeholder="E-mail Institucional" required>
    <input type="text" id="matricula" placeholder="Matrícula ou CPF" required>
    <input type="password" id="senha" placeholder="Senha" required>
    
    <button onclick="fazerLogin()">Entrar</button>
    
    <p style="font-size: 12px; color: gray;">Esqueceu a senha?</p>
    <img src="https://gov.br/etc.clientlibs/govbr/clientlibs/clientlib-base/resources/images/logo.png" alt="gov.br" width="80">
  </div>

  <script>
    function fazerLogin() {
      const perfil = document.getElementById('perfil').value;
      const email = document.getElementById('email').value;
      const matricula = document.getElementById('matricula').value;
      const senha = document.getElementById('senha').value;

      if (email && matricula && senha) {
        alert(`Login bem-sucedido como ${perfil.toUpperCase()}!\nRedirecionando...`);
      } else {
        alert("Preencha todos os campos!");
      }
    }
  </script>

</body>
</html>