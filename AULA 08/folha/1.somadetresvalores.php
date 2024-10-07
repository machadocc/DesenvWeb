<?php
    function somaTresValores($a, $b, $c) {
        $resultado = $a + $b + $c;
        if ($a > 10) {
            echo "<span style='color: blue;'>Resultado: $resultado</span><br>";
        }
        if ($b < $c) {
            echo "<span style='color: green;'>Resultado: $resultado</span><br>";
        }
        if ($c < $a && $c < $b) {
            echo "<span style='color: red;'>Resultado: $resultado</span><br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        somaTresValores($valor1, $valor2, $valor3);
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Soma de 3 Valores</title>
</head>
<body>
    <form method="POST">
        Valor 1: <input type="number" name="valor1"><br>
        Valor 2: <input type="number" name="valor2"><br>
        Valor 3: <input type="number" name="valor3"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
