<?php

    $perfil = $_SESSION['perfil'];

    switch ($perfil) {
        case 'Administrador':
            echo " <a class='myButton' href='view/formCadastro.php'>Cadastro de Clientes</a>";
            echo " <a class='myButton' href='view/listaCliente.php'>Lista de Clientes</a>";
            echo " <a class='myButton' href='view/CadastroFuncionario.php'>Cadastro de Funcionarios</a>";
            break;
        
        case 'Funcionario':
            echo " <a class='myButton' href='view/formCadastro.php'>Cadastro de Clientes</a>";
            echo " <a class='myButton' href='view/listaCliente.php'>Lista de Clientes</a>";
            break;
    }

?>