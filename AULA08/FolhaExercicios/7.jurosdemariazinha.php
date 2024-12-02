<?php
    function calculaJurosMariazinha($valorVista, $parcelas, $valorParcela) {
        $totalPago = $parcelas * $valorParcela;
        $juros = $totalPago - $valorVista;

        return "Mariazinha pagará R$ " . number_format($juros, 2, ',', '.') . " de juros no financiamento.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $parcelas = (int) $_POST['parcelas'] ?? 0;
        $valorParcela = (float) $_POST['valorParcela'] ?? 0.00;

        echo calculaJurosMariazinha(22500, $parcelas, $valorParcela);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Financiamento de Mariazinha</title>
</head>
<body>
    <form method="POST">
        Parcelas: <input type="number" name="parcelas" value="60" min="1" required><br>
        Valor da Parcela: <input type="number" step="0.01" name="valorParcela" value="489.65" required><br>
        <input type="submit" value="Calcular Juros">
    </form>
</body>
</html>
