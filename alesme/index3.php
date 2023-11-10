<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <title>Site de Cartões</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
<a href="home.php" class="button" target="_blank">HOME</a>
</header>

<body>
  <div class="box-card" >
    <div class="card">
      <img src="mec4.jpeg" alt="Imagem do Cartão">
      <h3>FAÇA SUA TROCA DE ÓLEO</h3>
      <p>MECÂNICA</p>
      <a href="https://rabbot.co/blog/troca-de-oleo-tudo-o-que-voce-precisa-saber-sobre-o-assunto/">Saiba mais</a>
    </div>
      <div class="card">
      <img src="ui.jpg" alt="Imagem do Cartão">
      <h3>MECÂNICA ESPECIALIZADA</h3>
      <p> INJEÇÃO ELETRICA  </p>
      <a href="https://chiptronic.com.br/blog/entenda-como-funciona-injecao-eletronica-dos-carros-2">Saiba mais</a>
    </div>
  </div>
  <div class="box-card">
    <div class="card">
      <img src="elet.jpg" alt="Imagem do Cartão">
      <h3>TROCA DE LÂMPADAS</h3>
      <p> ELÉTRICA </p>
      <a href="https://www.intermecautomotive.com.br/sistema-eletrico-do-carro/">Saiba mais</a>
    </div>
    <div class="card">
      <img src="pneu.jpg" alt="Imagem do Cartão">
      <h3>TROCA DE PNEUS</h3>
      <p>MECÂNICA </p>
      <a href="https://www.michelin.com.br/auto/conselhos/troca-de-pneus/quanto-tempo-duram-os-pneus">Saiba mais</a>
    </div>
  </div>


</body>

<style>
body{
  background-color: #ff0000; 
  display: flex; 
  flex-direction: column;
  text-align: center;
}
.card {
  width: 400px;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-align: center;
  margin: 20px auto;
  background-color: darkblue;
}
header{
 font-size: 40px;
 gap: 10px;
 
}

.box-card{
  display: flex;
}

.card img {
  width: 400px;
  max-height: 200px;
  object-fit: cover;
  border-radius: 5px;
  margin-bottom: 10px;
}

.card h3 {
  margin: 0;
  font-size: 20px;
}

.card p {
  font-size: 14px;
  color: #555;
}

.card a {
  display: block;
  margin-top: 15px;
  text-decoration: none;
  color: #ff0000;
  font-weight: bold;
}
  </style>

</html>



