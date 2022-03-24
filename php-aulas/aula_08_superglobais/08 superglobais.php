<?php
// variaveis super-globais!

echo '<pre>';
var_dump ($_REQUEST); 



/*Variaveis usadas no exemplo acima !

var_dump ($_SERVER); 
   // $_SERVER é uma variável super global do PHP que contém informações sobre cabeçalhos, caminhos e localizações de script.

var_dump ($_GET);
   // $_GET é uma variável super global PHP que é usada para coletar dados de formulário após enviar um formulário HTML com method="get".
      $_GET também pode coletar dados enviados na URL.
      
var_dump ($_POST);
   // $_POST é uma variável super global PHP que é usada para coletar dados de formulário após enviar um formulário HTML com method="post". 
      $_POST também é amplamente usado para passar variáveis.

   Observação
      O metodo "post" vai pegar o conteudo digitado no fomulario e guarda na variavel $_POST .    

var_dump ($_REQUEST);
   //  $_REQUEST é uma variável super global do PHP que é usada para coletar dados após enviar um formulário HTML.
      são providas para o script via mecanismos de entradas GET, POST, e COOKIE e portando poderia ser modificadas por um usuário remoto e não podem ser confiadas.
*/

