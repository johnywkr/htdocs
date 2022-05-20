<?php
require_once '../dao/loginDAO.php';

    session_start();                                                    // sessao Para o servidor checar se o login existe.

    $usuario = isset($_POST['usuario'])? $_POST['usuario']: '' ;        // a variavel usuario esta recuperando o usuario passado la no formlogin
    $senha = $_POST['senha'];

    $loginDAO = new LoginDAO();
    $login = $loginDAO->login($usuario,$senha);

    if(!empty($login)){                             // empty quer dizer vazio , entao se minha session nao estiver vazia , ela vai receber o usuario do meu login
                                                    // e o meu perfil vai receber o nome
        $_SESSION['usuario'] = $login['user'];
        $_SESSION['perfil'] = $login['nome'];
        //print_r($_REQUEST);
        //echo "deu bom" ;
        header("location: ../index.php");
    }else{
        echo "<script>alert('Usuario e/ou Senha incorretos')
            window.location = '../view/formLogin.php'
        </script>";
    }
?>