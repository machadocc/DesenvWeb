<?php

$salario1 = 0;
$salario2 = 0;

$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
++$salario2;
$salario1  *= 1.1;  //adiciona 10%

echo "Valor salario 1: $salario1, Valor salario 2: $salario2 <br>";






// Pratica 03

if ($salario1 > $salario2) {
    echo "O valor da variavel 1 é maior que o valor da variavel 2 <br>";
}
elseif ($salario2 > $salario1) {
    echo "O valor da variavel 2 é maior que o valor da variavel 1 <br>";
} else {
    echo "Os valores são iguais <br>";
}





// Pratica 04

for ($x = 0; $x = 100; $x++ ) {
   ++$salario1;
   if ($x == 49){
    break;
   }
}

if ($salario1 < $salario2) {
    echo "Salario 1 menor que o salario 2, salario 1 = $salario1";
}





// Pratica 05

// FORMA 1 - MATRIZ UNIDEMENSIONAL
$disciplina = array("Engenharia de Software","Banco de Dados","Administração e Sistemas de Informação", "Programação Web", "Estrutura de Dados");
$professor = array("Jullian", "Marco", "Sandro", "Cleber", "Fernando");

for($i = 0; $i < count($disciplina); $i++ ) {
    echo "Disciplina $disciplina Professor $professor";
}

// FORMA 2 - MATRIZ ASSOCIATIVA
$discProf = array("Engenharia de Software" => "Julian",
"Banco de Dados" => "Marco",
"Administração e Sistemas de Informação" => "Sandro", 
"Programação Web" => "Cleber", 
"Estrutura de Dados" => "Fernando");

foreach ($discProf as $disc => $prof){
    echo "Disciplina $disc Professor $prof";
}






// Pratica...
$status = array("Otimo", "Muito Bom", "Bom", "Ruim", "Pessimo");

foreach ($status as $valor) {
    echo "$valor  <br>";
}
?>