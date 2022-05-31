<?php
require_once '../dto/funcionarioDTO.php';
require_once '../dao/funcionarioDAO.php';


    $cpf = $_POST['cpf'];                       //a variavel cpf vai receber o cpf do formulario passado pelo metodo post.
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = ($_POST['senha']);
    $perfil = $_POST['perfil'];
    $sexo = $_POST['sexo'];
    $datanasc = date($_POST['datanasc']);

    var_dump($_POST['cpf'],['nome'],['senha']);

    $funcionarioDTO = new funcionarioDTO();
    $funcionarioDTO->setCpf($cpf);
    $funcionarioDTO->setNome($nome);
    $funcionarioDTO->setEmail($email);
    $funcionarioDTO->setUsuario($usuario);
    $funcionarioDTO->setPerfil($perfil);
    $funcionarioDTO->setSenha($senha);
    $funcionarioDTO->setSexo($sexo);
    $funcionarioDTO->setDatanasc($datanasc);

    $funcionarioDAO = new funcionarioDAO();
    $ok = $funcionarioDAO->cadastrarFuncionario($funcionarioDTO);

    if($ok){
        echo "deu bom";
    }else{
        echo "nao deu bom";
    }
?>