<?php

$pastas = array(
    "bsn" => array(
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
    )
);

function criarArvore(array $estrutura, int $nivel = 0): void {
    foreach ($estrutura as $chave => $valor) {
        echo str_repeat("- ", $nivel) . (is_array($valor) ? "$chave\n" : "$valor\n");
        if (is_array($valor)) {
            criarArvore($valor, $nivel + 1);
        }
    }
}

criarArvore($pastas);
