<?php
    function calculaJurosMariazinha($valorVista, $parcelas, $valorParcela) {
        $totalPago = $parcelas * $valorParcela;
        $juros = $totalPago - $valorVista;
        return "Mariazinha pagará R$ $juros de juros no financiamento.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $parcelas = $_POST['parcelas'];
        $valorParcela = $_POST['valorParcela'];
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
        Parcelas: <input type="number" name="parcelas"><br>
        Valor da Parcela: <input type="number" name="valorParcela"><br>
        <input type="submit" value="Calcular Juros">
    </form>
</body>
</html>
