<?php
require_once '../dao/clienteDAO.php';

$cpf = $_GET["cpf"];

$clienteDAO = new clienteDAO();
$clienteDAO->excluirCliente($cpf);

//header("Location: ../view/listaCliente.php");                             //header ou o script ,  usado para redirecionar a pagina !
echo "<script> window.location='../view/listaCliente.php' </script>";
