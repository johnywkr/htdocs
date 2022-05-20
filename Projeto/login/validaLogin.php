<?php

session_start();
if (!isset($_SESSION['usuario'])) {                     //insset -> verificar
  header("location: view/formLogin.php");
}

?>