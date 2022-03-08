<?php

/*

$nome = 'johne';
$sobrenome = 'araujo';

//print $nome . ' ' . $sobrenome;    


$nome_completo = $nome . ' ' . $sobrenome;      // concatenando variavel dentro de outra variavel !

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
$b = &$a;  // & => indica passagem de valor por referencia !

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

if ($peso > 25){        // usando if no lugar da variavel com var_dump !
    print 'multa';
}
*/


$nome = 'lklk';  //--> se eu digitar vai aparecer se tem conteudo , se nao fica em branco !!

if ($nome){
    print 'nome tem conteudo !';
}