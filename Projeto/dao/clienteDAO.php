<?php
require_once '../dto/clienteDTO.php';
require_once 'conexao/Conexao.php';

class clienteDAO
{


    function cadastrarCliente(ClienteDTO $clienteDTO)
    {  // a variavel vai receber tudo que estar na class clienteDTO, tudo que esta la vai poder ser manipulado aqui.
        $nome = $clienteDTO->getNome();
        $cpf = $clienteDTO->getCpf();
        $email = $clienteDTO->getEmail();
        $sexo = $clienteDTO->getSexo();
        $datanasc = $clienteDTO->getDatanasc();

        //INSERINDO NO BD
        $banco = new mysqli("localhost", "root", "", "form");
        //query : uma solicitaçao
        $sql = $banco->query("insert into cliente value ('$cpf','$nome','$email','$sexo','$datanasc');");
        return $sql;
        if (!$sql) {
            $msg = $banco->error;
            echo $msg;
        }
        return $msg;
    }


    function getListaCliente()
    {
        $banco = new Conexao();
        $conexao = $banco->getConexao();
        $sql = $conexao->query("select * from cliente");
        return $sql;
        if (!$sql) {
            $msg = $conexao->error;
            return $msg;
        }
    }



    function getClienteByCpf($cpf)
    {
        $banco = new Conexao();
        $conexao = $banco->getConexao();

        $sql = $conexao->query("Select * from cliente where cpf = '$cpf'");
        $final = $sql->fetch_assoc();
        if (!$final) {
            echo $conexao->error;
        } else {
            return $final;
        }
    }

    function alterarCliente(ClienteDTO $clienteDTO)
    {
        $cpf = $clienteDTO->getCpf();
        $nome = $clienteDTO->getNome();
        $email = $clienteDTO->getEmail();
        $sexo = $clienteDTO->getSexo();
        $datanasc = $clienteDTO->getDatanasc();

        $banco = new Conexao();
        $conexao = $banco->getConexao();

        $sql = $conexao->query(" update cliente set nome = '$nome', email='$email', sexo ='$sexo', datanasc='$datanasc' where cpf= '$cpf' ");
        if (!$sql) {
            echo $conexao->error;
        } else {
            return $sql;
        }
    }

    function excluirCliente($cpf)
    {
        $banco = new Conexao();
        $conexao = $banco->getConexao();

        $sql = $conexao->query("delete from cliente where cpf = '$cpf'");

        if (!$sql) {
            echo $conexao->error;
        } else {
            return $sql;
        }
    }
}
