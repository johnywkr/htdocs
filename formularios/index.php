<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>

<body>
    <h1>Cadastrar Usuàrio</h1>
    <form method="POST" action="processa.php">
        <label for="">Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>

        <label for="">Email: </label>
        <input type="email" name="email" placeholder="Digite o seu email"><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>

</html>