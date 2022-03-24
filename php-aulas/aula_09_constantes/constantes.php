<?php
// O que define  uma constante ? com a palavra chave define. logo abaixo tem o comando !

define('LANGUAGE', 'PT_BR');

/* Diferente de uma variavel, uma "constante" não utiliza o $ na frente do nome. Só a palavra chave!
   Obs: Constante não se muda o valor , ela é definida no começo da sua aplicação.   */

var_dump ( LANGUAGE) ;


// _FILE_ _LINE_ _DIR_ : São constantes magicas. Exemplos abaixo!

var_dump (__FILE__);
// _FILE_ Mostra o caminho que você está acessando.

var_dump (__LINE__ );
// _LINE_ Mostra a linha do arquivo onde ela foi digitada/executada .

var_dump (__DIR__ );
// __DIR__ Mostra o diretorio onde o comando está sendo executado.

