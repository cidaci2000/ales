    
  <?php

  include_once('config/config.php');
  
  // Função para sanitizar dados
  function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  // Handle form submission
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get form data
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $time = sanitize($_POST['time']);
    $date = sanitize($_POST['date']);
    $atendente = sanitize($_POST['atendente']);
  
    // Prepare the statement
    $stmt = mysqli_prepare($conexao, "INSERT INTO agendamentos(name, email, time, date, atendente) VALUES (?, ?, ?, ?, ?)");

    // Bind the values to the statement
    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $time, $date, $atendente);

        // Execute the statement
      mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt); 
  
    // Redirect to success page
    header("Location: agenda_cliente.php");
  }
  
  ?>
        
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
          <title>Agendamento</title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <p class="al"> <a href="index.php" class="button">
    <i class="fas fa-arrow-left"></i> HOME   </a> </p>
      <h1>AGENDAMENTO DE MECANICA</h1>
      <h2> BEM VINDO</h2>
      <form action="index4.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br> 
        <label for="time">Hora:</label>
        <input type="time" id="time" name="time" required>
        <br>
        <label for="date">Data:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="atendente">ATENDENTE:</label>
        <input type="text" id="atendente" name="atendente" required>
        <br>
        <input type="submit" value="submit">
      </form>
    </body>
    </html>
    
    <style>
   body {
        font-family: Arial, sans-serif;
        margin: 0px;
      }
 
      h1 {
        text-align: center;
      }
      
      H2 {
        text-align: center;
      }
      form {
        max-width: 400px;
        margin: 0 auto;
      }
      
      label, input {
        display: block;
        margin-bottom: 10px;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }
      
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
   
    