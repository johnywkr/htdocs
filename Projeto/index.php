<?php
include 'login/validaLogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/cssLinks.css" />
</head>

<body>
  <?php

  echo "Perfil: ", $_SESSION['perfil'];

  ?>


  <nav>
    <a href="view/formCadastro.php"><button class="myButton">Cadastro de Clientes</button></a>
    <a href="view/listaCliente.php"><button class="myButton">Lista de Clientes</button></a>
    <a href="controller/logoffController.php">Logout</a>
  </nav>
</body>

</html>