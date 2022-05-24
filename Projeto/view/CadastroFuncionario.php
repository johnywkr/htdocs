<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Usuarios</title>
    <link rel="stylesheet" href="../css/cssForm.css" />
</head>

<body>



    <main>

        <div class="container">
            <h1>CADASTRE - SE</h1>
            <form action="../controller/cadastrarFuncionario.php" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inpuut" />
                <input type="text" name="cpf" id="cpf" placeholder="Cpf" class="inpuut" />
                <input type="text" name="email" id="email" placeholder="Seu Email" class="inpuut" />

                <input type="text" name="usuario" id="usuario" placeholder="Seu Usuario" class="inpuut" />

                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="inpuut" />

                <select name="perfil" id="perfil">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionario</option>
                </select>

                <p>Sexo</p>
                <label for="">masculino</label>
                <input type="radio" name="sexo" id="masculino" value="M" class="sexo" />

                <label for="">feminino</label>
                <input type="radio" name="sexo" id="feminino" value="F" class="sexo" />

                <p>Data de Nascimento</p>
                <input type="date" name="datanasc" id="data" class="inpuut" />

                <input type="submit" value="Cadastrar" id="submit" class="inpuut" />
            </form>
        </div>

    </main>



</body>

</html>