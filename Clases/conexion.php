<?php

$user='root';
$pass='';

try{
  $conexion = new PDO ("mysql:host-localhost; dbname-J'aime_db; charset=utf8mb4",
  $user,
  $pass,
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
}
catch (PDOException $exception){
  echo $exception -> getMessage();
}
?>
