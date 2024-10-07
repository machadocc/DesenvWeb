<?php
    function verificaDivisivelPor2($numero) {
        if ($numero % 2 == 0) {
            return "Valor divisível por 2";
        } else {
            return "O valor não é divisível por 2";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        echo verificaDivisivelPor2($numero);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Número divisível por 2</title>
</head>
<body>
    <form method="POST">
        Número: <input type="number" name="numero"><br>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
