<?php
    function calculaParcelasPaulinho($valor, $parcelas, $taxaJuros) {
        $montante = $valor * (1 + ($taxaJuros / 100) * $parcelas);
        return "O valor das parcelas para $parcelas vezes com juros de $taxaJuros% será R$ " . number_format($montante / $parcelas, 2, ',', '.');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $parcelas = $_POST['parcelas'];
        $juros = $_POST['juros'];
        echo calculaParcelasPaulinho(8654, $parcelas, $juros);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parcelas com Juros Simples - Paulinho</title>
</head>
<body>
    <form method="POST">
        Parcelas: <input type="number" name="parcelas"><br>
        Taxa de Juros: <input type="number" step="0.1" name="juros"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
