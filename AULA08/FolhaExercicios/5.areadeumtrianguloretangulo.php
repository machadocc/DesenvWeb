<?php
    function calculaAreaTriangulo($base, $altura) {
        $area = ($base * $altura) / 2;
        return "A área do triângulo com base $base e altura $altura metros é $area metros quadrados.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        echo calculaAreaTriangulo($base, $altura);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Área de um Triângulo Retângulo</title>
</head>
<body>
    <form method="POST">
        Base (em metros): <input type="number" name="base"><br>
        Altura (em metros): <input type="number" name="altura"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
