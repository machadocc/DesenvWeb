<?php
if (!isset($_COOKIE['usuario']) || !isset($_COOKIE['inicio'])) {
    echo "<script>alert('Os dados da sessão foram perdidos.');</script>";
    exit;
}

echo "Usuário: " . htmlspecialchars($_COOKIE['usuario']) . "<br>";
echo "Data/Hora de início: " . htmlspecialchars($_COOKIE['inicio']) . "<br>";

