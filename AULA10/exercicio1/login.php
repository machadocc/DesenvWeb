<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['senha'] = $_POST['senha'];
    $_SESSION['inicio'] = date('Y-m-d H:i:s');
    $_SESSION['ultima_requisicao'] = $_SESSION['inicio'];
    header('Location: dashboard.php');
    exit;
}
?>

<form method="post" action="">
    Login: <input type="text" name="login" required>
    Senha: <input type="password" name="senha" required>
    <button type="submit">Entrar</button>
</form>
