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

<body style="background-color: blueviolet;">
  <?php

  echo "Perfil: ", $_SESSION['perfil'];
  echo "Usuario: ", $_SESSION['usuario'];

  ?>


  <div>
    <?php

    include 'view/menu.php';

    ?>
    <a class="myButton" href="controller/logoffController.php">Logout</a>
  </div>


</body>

</html>