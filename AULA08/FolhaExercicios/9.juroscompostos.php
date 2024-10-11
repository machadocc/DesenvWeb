<?php
    function calcularParcelas($valorMoto, $parcelas) {
        switch ($parcelas) {
            case 24:
                $taxaJuros = 2.0;
                break;
            case 36:
                $taxaJuros = 2.3;
                break;
            case 48:
                $taxaJuros = 2.6;
                break;
            case 60:
                $taxaJuros = 2.9;
                break;
            default:
                return "Número de parcelas inválido.";
        }

        $montante = $valorMoto * pow((1 + $taxaJuros / 100), ($parcelas / 12));
        $valorParcela = $montante / $parcelas;

        return "O valor das parcelas para $parcelas vezes com juros compostos de $taxaJuros% será R$ " . number_format($valorParcela, 2, ',', '.');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['valorMoto']) && is_numeric($_POST['valorMoto']) && $_POST['valorMoto'] > 0) {
            $parcelas = (int) $_POST['parcelas'];
            $valorMoto = (float) $_POST['valorMoto'];
            echo calcularParcelas($valorMoto, $parcelas);
        } else {
            echo "Por favor, insira um valor válido para a moto.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parcelas com Juros Compostos - Juquinha</title>
</head>
<body>
    <form method="POST">
        <label for="valorMoto">Valor da moto à vista (R$):</label><br>
        <input type="number" name="valorMoto" step="0.01" placeholder="Informe o valor da moto" required><br><br>
        <label for="parcelas">Escolha o número de parcelas:</label><br>
        <select name="parcelas" id="parcelas" required>
            <option value="24">24 parcelas - 2,0% de juros compostos</option>
            <option value="36">36 parcelas - 2,3% de juros compostos</option>
            <option value="48">48 parcelas - 2,6% de juros compostos</option>
            <option value="60">60 parcelas - 2,9% de juros compostos</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
