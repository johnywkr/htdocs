<?php

/*

$nome = 'johne';
$sobrenome = 'araujo';

//print $nome . ' ' . $sobrenome;    


$nome_completo = $nome . ' ' . $sobrenome;           // concatenando variavel dentro de outra variavel !

print $nome_completo;


print 'johne " araujoo ';

print " johne ' araujo ";

print " $nome \" $sobrenome} ";

*/


//---------------------------------------------------------------------------------


/*
$a = 5;
$b = 4;

var_dump ($a + $b);
*/


//---------------------------------------------------------------------------------


/*
$a = 5;
$b = &$a;                       // & => indica passagem de valor por referencia !

$a = 10;

var_dump ($a);
var_dump($b);
*/

//---------------------------------------------------------------------------------

/*
$peso = 30;

$multa  = ($peso > 25);

var_dump ($multa);


$peso = 30;

if ($peso > 25){                     // usando if no lugar da variavel com var_dump !
    print 'multa';
}
*/


//---------------------------------------------------------------------------------

/*
$nome = 'lklk';                     //--> se eu digitar vai aparecer se tem conteudo ,assim sendo true ! se nao fica em branco sendo false !!

if (!empty($nome)){                 //o empty considera vazio alguns valores . como : "",0, null, false .
    print 'nome tem conteudo !';
}
*/

//---------------------------------------------------------------------------------

/*
$lista = ['vermelho','verde','azul','amarelo'];
var_dump ($lista);
*/


//TIPO OBJETO DO PHP//
$pessoa1 = new stdClass;
$pessoa1 ->nome = 'Pedro';
$pessoa1 ->altura = 1.8;

$pessoa2 = $pessoa1;                 //passagem de dados por referencia e nao por valor ! sendo assim , pessoa1 e pessoa2 recebe o valor 'joana'.

$pessoa2 ->nome = 'joana';

var_dump ($pessoa1);
print '<br>';
var_dump ($pessoa2);