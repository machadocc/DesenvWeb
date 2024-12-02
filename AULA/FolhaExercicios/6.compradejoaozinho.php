<?php
    function calculaCompraJoaozinho($produtos, $precos) {
        $total = 0;
        foreach ($produtos as $produto => $quantidade) {
            $total += $quantidade * $precos[$produto];
        }

        $saldo = 50 - $total;
        if ($saldo > 0) {
            return "<span style='color: blue;'>Joãozinho ainda pode gastar R$ $saldo</span>";
        } elseif ($saldo == 0) {
            return "<span style='color: green;'>Saldo para compras esgotado.</span>";
        } else {
            return "<span style='color: red;'>Faltam R$ " . abs($saldo) . " para cobrir a compra.</span>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produtos = [
            'maca' => $_POST['maca'],
            'melancia' => $_POST['melancia'],
            'laranja' => $_POST['laranja'],
            'repolho' => $_POST['repolho'],
            'cenoura' => $_POST['cenoura'],
            'batatinha' => $_POST['batatinha']
        ];

        $precos = [
            'maca' => 3.5,
            'melancia' => 1.2,
            'laranja' => 2.8,
            'repolho' => 1.5,
            'cenoura' => 3.0,
            'batatinha' => 4.0
        ];

        echo calculaCompraJoaozinho($produtos, $precos);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compra de Joãozinho</title>
</head>
<body>
    <form method="POST">
        Batatinha (kg): <input type="number" name="batatinha"><br>
        Melancia (kg): <input type="number" name="melancia"><br>
        Maçã (kg): <input type="number" name="maca"><br>
        Repolho (kg): <input type="number" name="repolho"><br>
        Laranja (kg): <input type="number" name="laranja"><br>
        Cenoura (kg): <input type="number" name="cenoura"><br>
        <input type="submit" value="Calcular Compra">
    </form>
</body>
</html>
