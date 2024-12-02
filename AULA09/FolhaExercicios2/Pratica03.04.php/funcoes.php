<?php

function calcularValorFinal(float $valor, float $desconto): float {
    if ($desconto < 0 || $desconto > 100) {
        throw new Exception("O desconto deve estar entre 0 e 100.");
    }
    return $valor - ($valor * $desconto / 100);
}

try {
    if (!isset($_REQUEST['valor']) || !isset($_REQUEST['desconto'])) {
        throw new Exception("Parâmetros 'valor' e 'desconto' são obrigatórios.");
    }

    $valor = (float) $_REQUEST['valor'];
    $desconto = (float) $_REQUEST['desconto'];

    if ($valor <= 0) {
        throw new Exception("O valor deve ser maior que zero.");
    }

    $valorFinal = calcularValorFinal($valor, $desconto);
    echo "Valor final após o desconto: R$ " . number_format($valorFinal, 2, ',', '.');
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}