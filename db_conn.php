<?php

$sname= "localhost"; // Cambia "localhost" si tu servidor de base de datos está en otro lugar
$uname= "root"; // Cambia "root" si has configurado un nombre de usuario diferente en MySQL
$password = ""; // Aquí debes ingresar la contraseña de tu base de datos, si la has configurado
$db_name = "otra"; // Cambia "login_db" por el nombre de tu base de datos


$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
?>
