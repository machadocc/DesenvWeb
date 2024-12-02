<?php
    function calculaCompra($produtos, $precos) {
        $total = 0;


        foreach ($produtos as $produto => $quantidade) {
            $quantidade = (float) $quantidade;
            $total += $quantidade * $precos[$produto];
        }

        $saldo = 50 - $total;

        if ($saldo > 0) {
            return "<span style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($saldo, 2, ',', '.') . "</span>";
        } elseif ($saldo == 0) {
            return "<span style='color: green;'>Saldo para compras esgotado.</span>";
        } else {
            return "<span style='color: red;'>Faltam R$ " . number_format(abs($saldo), 2, ',', '.') . " para cobrir a compra.</span>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produtos = [
            'maca' => $_POST['maca'] ?? 0,
            'melancia' => $_POST['melancia'] ?? 0,
            'laranja' => $_POST['laranja'] ?? 0,
            'repolho' => $_POST['repolho'] ?? 0,
            'cenoura' => $_POST['cenoura'] ?? 0,
            'batatinha' => $_POST['batatinha'] ?? 0
        ];

        $precos = [
            'maca' => 3.5,
            'melancia' => 1.2,
            'laranja' => 2.8,
            'repolho' => 1.5,
            'cenoura' => 3.0,
            'batatinha' => 4.0
        ];

        echo calculaCompra($produtos, $precos);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compra de Joãozinho</title>
</head>
<body>
    <form method="POST">
        <label for="batatinha">Batatinha (kg):</label> 
        <input type="number" step="0.01" name="batatinha" value="0"><br>

        <label for="melancia">Melancia (kg):</label> 
        <input type="number" step="0.01" name="melancia" value="0"><br>

        <label for="maca">Maçã (kg):</label> 
        <input type="number" step="0.01" name="maca" value="0"><br>

        <label for="repolho">Repolho (kg):</label> 
        <input type="number" step="0.01" name="repolho" value="0"><br>

        <label for="laranja">Laranja (kg):</label> 
        <input type="number" step="0.01" name="laranja" value="0"><br>

        <label for="cenoura">Cenoura (kg):</label> 
        <input type="number" step="0.01" name="cenoura" value="0"><br>

        <input type="submit" value="Calcular Compra">
    </form>
</body>
</html>
