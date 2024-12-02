<?php

// Pratica 1
define('NOME', 'Cristhian');
define('SOBRENOME', 'Machado');

$nomeCompleto = NOME . ' ' . SOBRENOME;

echo "Meu nome completo é: $nomeCompleto <br>";

// Pratica 2

$SALARIO1 = 1000;
$SALARIO2 = 2000;

$SALARIO2 = $SALARIO1;

$SALARIO2++;

$SALARIO1 += $SALARIO1 * 0.10;

echo "Valor Salario 1: $SALARIO1 e Valor Salario 2: $SALARIO2 <br>";

// Pratica 3
if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2 <br>";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2 <br>";
} else {
    echo "Os valores são iguais <br>";
}

// Pratica 4
for ($i = 1; $i <= 100; $i++) {
    $SALARIO1++;

    if ($i === 50) {
        break;
    }
}

if ($SALARIO1 < $SALARIO2) {
    echo "O valor final de SALARIO1 é: $SALARIO1 e é menor que SALARIO2 <br>";
}