<?php

session_start();
session_destroy();
$_SESSION["emailUsuario"] = $usuarioFinal["email"];
$_SESSION["nombreUsuario"] = $usuarioFinal["nombre"];

setcookie("emailUsUario", null, time() -1);
setcookie("passUsUario", null, time() -1);
header("Location: logIn.php")

?>
