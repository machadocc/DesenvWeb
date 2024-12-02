<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "Sessão expirada! Faça login novamente.";
    exit;
}

$agora = date('Y-m-d H:i:s');
$tempo_sessao = strtotime($agora) - strtotime($_SESSION['inicio']);

$_SESSION['ultima_requisicao'] = $agora;

echo "Bem-vindo, " . htmlspecialchars($_SESSION['login']) . "!<br>";
echo "Data/Hora de início da sessão: " . $_SESSION['inicio'] . "<br>";
echo "Data/Hora da última requisição: " . $_SESSION['ultima_requisicao'] . "<br>";
echo "Tempo de sessão: " . $tempo_sessao . " segundos.";
?>
