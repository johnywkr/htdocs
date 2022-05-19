<?php
require_once '../dao/clienteDAO.php';
require_once '../dto/clienteDTO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $data = date($_POST['datanasc']);


    $clienteDTO = new clienteDTO();
    $clienteDTO->setCpf($cpf);
    $clienteDTO->setNome($nome);
    $clienteDTO->setEmail($email);
    $clienteDTO->setSexo($sexo);
    $clienteDTO->setDatanasc($data);

    $clienteDAO = new clienteDAO();
    $ok =  $clienteDAO->alterarCliente($clienteDTO);
 
     if($ok){
        echo "<script> alert('Alterado com sucesso') 
            window.location='../view/listaCliente.php'
        </script>";
     }else{
        echo "Nao deu bom";
     }
?>