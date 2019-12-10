<?php

//arma un array de usuario para guardar, usando trim para ignorar los espacios en blanco antes y despues del "string"
function armarArrayUsuario($array){
    $usuarioParaGuardar = [
      "nombre"=> trim($array["nombre"]),
      "email"=> trim($array["email"]),
      "password" => password_hash($array["password"], PASSWORD_DEFAULT)
    ];
    return $usuarioParaGuardar;
    }
?>