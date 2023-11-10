
<?php

if(isset($_POST['submit']))
{
    

    include_once('config/config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validar os dados do formulário
        if (empty($_POST['nome'])) {
          echo 'O campo "Nome" é obrigatório.';
          exit;
        }
      
        if (empty($_POST['email'])) {
          echo 'O campo "E-mail" é obrigatório.';
          exit;
        }
      
        if (empty($_POST['mensagem'])) {
          echo 'O campo "Mensagem" é obrigatório.';
          exit;
        }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['mensagem'];
    
    $result = mysqli_query($conexao, "INSERT INTO mensagem(nome,email,mensagem) 
    VALUES ('$nome','$email','$mensagem')");

   
}
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Enviar mensagem ao administrador</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Enviar mensagem ao administrador</h1>
    <form action="enviar-mensagem.php" method="post">
      <input type="text" name="nome" placeholder="Nome">
      <input type="email" name="email" placeholder="E-mail">
      <textarea name="mensagem" placeholder="Mensagem"></textarea>
      <input type="submit" value="Enviar">
    </form>
  </div>
</body>
<div class="ff">
<a href="index.php">Voltar</a>
</div>
</html>
<style>
 body {
  font-family: sans-serif;
  align-items: center;
 
}
.ff{
    padding: 20px;
    margin-left: 45%;
}
.container {
  width: 400px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  
}
a {
  text-decoration: none;
  color: #000;
  font-size: 1.5em;
  padding: 10px 20px;
  background-color: #ccc;
  border-radius: 5px;
  width: 200px;
    
}

h1 {
  margin: 0;
}

form {
  margin-top: 20px;
}

input, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

textarea {
  height: 200px;
}

input[type="submit"] {
  background-color: #000;
  color: #fff;
  padding: 10px;
  border: none;
  cursor: pointer;
}
</style>

