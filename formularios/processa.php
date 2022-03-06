<?php
var_dump($_POST);
$nome = $_POST['nome'];

session_start();
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuario (nome, email, created) VALUES ('$nome','$email',NOW() )";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION ['msg'] = "<p style='color:green'>Usuàrio Cadastrado Com Sucesso!</p>";
    header("location: index.php");

}else{
    header("location: index.php");
}