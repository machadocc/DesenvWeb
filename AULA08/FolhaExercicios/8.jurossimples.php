<?php
    function calcularParcelas($valorMoto, $parcelas) {
        switch ($parcelas) {
            case 24:
                $taxaJuros = 1.5;
                break;
            case 36:
                $taxaJuros = 2.0;
                break;
            case 48:
                $taxaJuros = 2.5;
                break;
            case 60:
                $taxaJuros = 3.0;
                break;
            default:
                return "Número de parcelas inválido.";
        }

        $montante = $valorMoto * (1 + ($taxaJuros / 100) * ($parcelas / 12)); // O tempo é considerado em anos (parcelas / 12)
        $valorParcela = $montante / $parcelas;

        return "O valor das parcelas para $parcelas vezes com juros de $taxaJuros% será R$ " . number_format($valorParcela, 2, ',', '.');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $parcelas = (int) $_POST['parcelas'];
        $valorMoto = (float) $_POST['valorMoto']; // Obtém o valor da moto inserido pelo usuário
        echo calcularParcelas($valorMoto, $parcelas);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parcelas com Juros Simples - Paulinho</title>
</head>
<body>
    <form method="POST">
        <label for="valorMoto">Valor da moto à vista (R$):</label><br>
        <input type="number" name="valorMoto" step="0.01" placeholder="Informe o valor da moto" required><br><br>

        <label for="parcelas">Escolha o número de parcelas:</label><br>
        <select name="parcelas" id="parcelas" required>
            <option value="24">24 parcelas - 1,5% de juros</option>
            <option value="36">36 parcelas - 2,0% de juros</option>
            <option value="48">48 parcelas - 2,5% de juros</option>
            <option value="60">60 parcelas - 3,0% de juros</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
