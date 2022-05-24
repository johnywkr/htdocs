<?php
require_once 'conexao/Conexao.php';
    class funcionarioDAO{

        function cadastrarFuncionario(funcionarioDTO $funcionarioDTO){                                       //Essa function ira receber todos meus metodos da class funcionarioDTO, e armazenar numa variavel $funcionarioDTO .

           try {                                                //try catch , usado para ver se vai er algum erro no codigo , se nao houver segue a execução.
                $cpf = $funcionarioDTO->getCpf(); 
                $nome = $funcionarioDTO->getNome();
                $email = $funcionarioDTO->getEmail();
                $usuario = $funcionarioDTO->getUsuario();                                                        // Tudo que foi enviado no DTO eu peguei aqui!
                $senha = $funcionarioDTO->getSenha();
                $perfil = $funcionarioDTO->getPerfil();
                $sexo = $funcionarioDTO->getSexo();
                $datanasc = $funcionarioDTO->getDatanasc();

                $banco = new Conexao();                                                                          //Conexao com meu Banco de dados
                $conexao = $banco->getConexao();


                $sql = $conexao->prepare("insert into usuario(user,pass,perfil_idperfil) value(?,?,?)");                                    //Prepara um codigo para receber valores, as 3 interrogaçoes sao valores do metodo prepare.
                $sql->bind_param('ssi',$usuario,$senha,$perfil);                                                 //Para pegar esses valores, usamos o bind_param que vai inserir valores nessas interrogações .
                $sql->execute();                                                                                 // A primeira ? vai ser uma string a segunda outra string e a terceira um inteiro , sendo assim ('ssi') que vai ser $usuario $senha $perfil. 
                                                                                                                // O 'execute' vai executar o 'prepare' e em seguida, inserir os dados la na tabela usuario.
            
                $ultimoID = $conexao->insert_id;    //insert pega o ultimo id que foi inserido na tabela e armazenar no $ultimoID.


                $sql2 = $conexao->prepare("insert into funcionario values(?,?,?,?,?,?)");
                $sql2->bind_param('ssssii',$cpf,$nome,$email,$sexo,$datanasc,$ultimoID);
                $return = $sql2->execute();
                return $return;
            
           } catch (mysqli_sql_exception $e) {
                $erro = $e->getMessage();
                echo $erro;
           }

        }

    }

?>