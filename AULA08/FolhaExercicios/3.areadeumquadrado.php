<?php
    function calculaArea($lado) {
        $area = $lado * $lado;
        return "A área do quadrado de lado $lado metros é $area metros quadrados.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];
        echo calculaArea($lado);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Área de um Quadrado</title>
</head>
<body>
    <form method="POST">
        Lado (em metros): <input type="number" name="lado"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
