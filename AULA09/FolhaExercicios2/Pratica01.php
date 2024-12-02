<?php

function calcularMedia(array $notas): float {
    return array_sum($notas) / count($notas);
}

function verificarAprovacaoPorNota(float $media): string {
    return $media > 7 ? 'Aprovado' : 'Reprovado';
}

function calcularFrequencia(array $faltas, int $totalAulas): float {
    $diasFaltados = count($faltas);
    return (($totalAulas - $diasFaltados) / $totalAulas) * 100;
}

function verificarAprovacaoPorFrequencia(float $frequencia): string {
    return $frequencia > 70 ? 'Aprovado' : 'Reprovado';
}

$notas = [8, 6, 7.5, 9];
$faltas = [1, 0, 1];
$totalAulas = 10;

$media = calcularMedia($notas);
$statusNota = verificarAprovacaoPorNota($media);

$frequencia = calcularFrequencia($faltas, $totalAulas);
$statusFrequencia = verificarAprovacaoPorFrequencia($frequencia);

echo "Média: $media\n";
echo "Status por Nota: $statusNota\n";
echo "Frequência: $frequencia%\n";
echo "Status por Frequência: $statusFrequencia\n";