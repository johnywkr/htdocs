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
    <a class="myButton" href="view/formCadastro.php">Cadastro de Clientes</a>
    <a class="myButton" href="view/listaCliente.php">Lista de Clientes</a>
    <a class="myButton" href="view/CadastroFuncionario.php">Cadastro de Funcionarios</a>
    <a class="myButton" href="controller/logoffController.php">Logout</a>
  </nav>
</body>

</html>