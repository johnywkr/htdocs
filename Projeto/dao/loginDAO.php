<?php
require_once "conexao/Conexao.php";

    class LoginDAO{

        function login($usuario,$senha){

            $banco = new Conexao();
            $conexao = $banco->getConexao();

            $sql = $conexao->query("select u.user, u.pass, p.nome from usuario u join perfil p 
            on u.perfil_idperfil = p.idperfil
            where u.user = '$usuario' and u.pass = '$senha';");

            $assoc = $sql->fetch_assoc();
            return $assoc;
            if(!$assoc){
                echo $conexao->error;
            }
        }


    }

?>