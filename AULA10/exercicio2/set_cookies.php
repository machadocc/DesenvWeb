<?php
$usuario = "nome_usuario";
$data_inicio = date('Y-m-d H:i:s');

setcookie('usuario', $usuario, time() + (60 * 5), '/');
setcookie('inicio', $data_inicio, time() + (60 * 5), '/');

header('Location: get_cookie.php');
exit;
