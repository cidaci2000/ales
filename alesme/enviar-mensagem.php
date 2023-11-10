<?php

  // Validar os dados do formulário
  if (!isset($_POST['nome']) || empty($_POST['nome'])) {
    echo "O campo 'Nome' é obrigatório.";
    exit;
  }

  if (!isset($_POST['email']) || empty($_POST['email'])) {
    echo "O campo 'E-mail' é obrigatório.";
    exit;
  }

  if (!isset($_POST['mensagem']) || empty($_POST['mensagem'])) {
    echo "O campo 'Mensagem' é obrigatório.";
    exit;
  }

  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Erro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Erro</h1>
    <p>
      Você não possui um servidor de e-mail. Para enviar uma mensagem, é necessário configurar um servidor de e-mail.
    </p>
    <a href="mensagem.php">Voltar</a>
  </div>
</body>
</html>
<style>
    body {
  font-family: sans-serif;
}

.container {
  width: 400px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
}
h1{
    margin: 0;
}

a {
  text-decoration: none;
  color: #000;
  font-size: 1.5em;
  padding: 10px 20px;
  background-color: #ccc;
  border-radius: 5px;
}
</style>