<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/cssForm.css" />
  </head>
  <body>
    <div class="container">
      <h1>Faça seu Login</h1>
      <form action="../controller/loginController.php" method="post">
        <input type="text" name="usuario" id="usuario" placeholder="Usuario" />

        <input type="password" name="senha" id="senha" placeholder="Password" />

        <input type="submit" value="login" id="submit" />
      </form>
    </div>
  </body>
</html>
