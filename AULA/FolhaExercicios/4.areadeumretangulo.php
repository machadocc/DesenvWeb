<?php
    function calculaAreaRetangulo($ladoA, $ladoB) {
        $area = $ladoA * $ladoB;
        if ($area > 10) {
            return "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
        } else {
            return "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = $_POST['ladoA'];
        $ladoB = $_POST['ladoB'];
        echo calculaAreaRetangulo($ladoA, $ladoB);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Área de um Retângulo</title>
</head>
<body>
    <form method="POST">
        Lado A (em metros): <input type="number" name="ladoA"><br>
        Lado B (em metros): <input type="number" name="ladoB"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
