

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>LISTA DE AGENDAMENTOS POR CLIENTE</title>
</head>
<body>

  <h1>LISTA DE AGENDAMENTOS POR CLIENTE</h1>
  <a href="../adm.php"><img src="../imagem/logo.png" alt=""></a>
  <table>
    <thead>
      <tr>
      <th class="name">Nome:</th>
        <th class="email">Email:</th>
        <th class="time">Horario:</th>
        <th class="date">Data:</th>
        <th class="atendente">Atendente:</th>
      </tr>
    </thead>
    <tbody>

    <?php 
include_once('config/config.php');



// Consulta SQL para selecionar todos os registros
$sql = "SELECT * FROM agendamentos;";

// Executa a consulta SQL
$result = mysqli_query($conexao, $sql);

// Verifica se a consulta foi bem-sucedida
if ($result) {
  // Itera sobre os resultados da consulta
  while ($row = mysqli_fetch_assoc($result)) {
    // Exibe os dados do agendamento
    echo "<tr>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['time']}</td>";
    echo "<td>{$row['date']}</td>";
    echo "<td>{$row['atendente']}</td>";
    echo "</tr>";
  }
} else {
  // Erro ao executar a consulta
  echo "Erro ao selecionar registros: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>

<style>
body{
  background-image: url(../imagem/fundo3.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  font: 900;
  text-align: center;
}
table {
  width: 100%;
}

th, td {
  padding: 10px;
  border: 1px solid black;
  background-color: #EE82EE;
}

th {
  background-color: #888888;
}

</style>