<?php
require_once '../dao/clienteDAO.php';
$cpf = $_GET['cpf'];
$clienteDAO = new clienteDAO();
$cliente = $clienteDAO->getClienteByCpf($cpf);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alterar Cadastro</title>
    <link rel="stylesheet" href="../css/cssForm.css" />
</head>

<body>



    <main>

        <div class="container">
            <h1>Cadastro cliente</h1>
            <form action="../controller/alterarCliente.php" method="post">
                <input type="text" name="cpf" id="cpf" placeholder="Cpf" class="inpuut" value="<?php echo $cliente['cpf'] ?>" />
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inpuut" value="<?php echo $cliente['nome'] ?>" />
                <input type=" text" name="email" id="email" placeholder="Seu Email" class="inpuut" value="<?php echo $cliente['email'] ?>" />

                <p>Sexo</p>
                <label for="">masculino</label>
                <input type="radio" name="sexo" id="masculino" value="m" <?php echo $cliente['sexo'] == 'm' ? 'checked' : ' ' ?> />

                <label for="">feminino</label>
                <input type="radio" name="sexo" id="feminino" value="f" <?php echo $cliente['sexo'] == 'f' ? 'checked' : ' ' ?> />

                <div>
                    <p>Data de Nascimento</p>
                    <input type="date" name="datanasc" id="data" class="inpuut" value="<?php echo $cliente['datanasc'] ?>" />
                </div>

                <input type="submit" value="Cadastrar" id="submit" class="inpuut" />
            </form>
        </div>

    </main>



</body>

</html>