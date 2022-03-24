<?php
//O comando a baixo vai habilitar a tipagem stricta , nesse caso os tipos das variaveis deve ser exatamente os solicitados.
// ha excessao é o float e integrer que acontece natural.
declare (strict_types=1);


print '<p>1º  A linguagem PHP , define o tipo com base no seu conteudo. Sendo assim tipada.</p>';

print ' ';

$codigo = '5';
$nome = 'teste';

var_dump ($codigo);
var_dump ($nome);
print '<br><br><br><br>';

print '<p>2º Concatenação.</p>';
print ' ';

print '<p>Abaixo vai concatenar as strings!</p>';
var_dump('nome ' . 'sobrenome');
print '<br><br>';

print '<p>Abaixo vai juntar e nao somar resultando em 24!</p>';
var_dump ('2' . '4');
print '<br><br>';

print '<p>Abaixo vai somar pq o php indetifica pelo sinal de mais sendo string ou nao, sendo final 9!</p>';
var_dump ('4' + 5); 


print '<br><br><br><br>';

print '<p>3º Function .</p>';

function calcular_imc ($peso, $altura){

    print '<p>O var_damp ($altura, $peso) vai mostrar o tipo da variavel abaixo
    sendo uma float e outro int.</p>';


    var_dump ( $altura, $peso);
    print '<br>';

    return $peso /($altura * $altura);
    print '<br>';
}

var_dump(calcular_imc( '75xx', 1.8));