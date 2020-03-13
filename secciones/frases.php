<?php

session_start();

$dsn= "mysql:dbname=ecommerce;host=127.0.0.1;port=3306";
$user='root';
$pass='';

try{
  $conexion = new PDO ($dsn, $user, $pass);

}
catch (PDOException $exception){
  echo $exception -> getMessage();
}

$consulta=$conexion->prepare('SELECT * from productos WHERE productos.nombre=$variable');
$consulta->execute();
$resultado=$consulta->fetchAll(PDO::FETCH_ASSOC)
$variable="frases";

include "header-banner.php";
include "cuerpo-secciones.php";
include "../footer.html";

?>	
