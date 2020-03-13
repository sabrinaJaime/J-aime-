<?php



/*try{
    $conexion = new PDO ($dsn, $user,$pass);
  
  }
  catch (PDOException $exception){
    echo $exception -> getMessage();
  }*/

  $user='root';
  $pass='';
  $host='localhost';
  $db='hola';
  $conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
  var_dump($conexion);

  /*$db= new PDO("mysql:host=localhost;dbname=pruebita;port=3306");*/


  if($_POST){
     $usuario=$_POST["nombre"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      $hashing=password_hash($password, PASSWORD_DEFAULT);
      $consulta=$conexion->prepare("INSERT into pruebita values('default', '$usuario', '$email', '$hashing')");
      $consulta->execute();
      echo "no hay errores";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>J'AIME</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js" =""></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../CSS/Estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
</head>
<body>

    <!-----------------LOGO----------------------------->
	<div class="container">
		<div class="row">
			<div class="logo">
					<div class="col-sm-12">
						<a href="index.html"><img src="../CSS/Imagenes/logonuevosinsombra.png"></a>
					</div>
			</div>
		</div>
	</div>
    <!-----------------LOGO----------------------------->
    
    	<!-----------------MENU----------------------------->
		<div class="container menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<!-------------------INICIO SESION---------------------------->
  	<!--		<a href="login-out/logIn.php"><i class="fas fa-users carrito"></i></a>
  		<!- ------------------INICIO SESION---------------------------->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.html">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cocina</a>
          <a class="dropdown-item" href="#">Infantil</a>
          <a class="dropdown-item" href="#">Frases</a>
          <a class="dropdown-item" href="#">Zen</a>
          <a class="dropdown-item" href="#">Música</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../FAQ/preguntasFrecuentes.html">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contacto</a>
      </li>
      
    </ul>
    
      <i class="fas fa-shopping-cart carrito"></i>
    
  </div>
</nav>
<hr>
</div>

	<!-----------------MENU----------------------------->

   <!-----------------FORMULARIO------------------------->

   <div class="formu">
    <form action="" method="POST" >
        <h2>Crear usuario</h2>
        <br>
        <!-- (CONDICION) ? A : B -->
        <input type="text" name="nombre" placeholder="Nombre y apellido" value="">
       
        <input type="email" name="email" placeholder="Email" value="">
        
       
        <input type="password" name="password" placeholder="Contraseña" >
       
       
        <input type="password" name="repassword" placeholder="Repetir contraseña" > 
        
        <br>
        <input type="submit" name="Enviar" value="Registrarse" class="bot">
          
            </form>
       
       
  </div>
    <!-----------------FORMULARIO------------------------->

      	<!-----------------FOOTER----------------------------->
	<section class="footer">
		<div class="container">
			<div class="row">
			
					<div class="col-sm-12">
						<h3>DESARROLLADO POR EQUIPO ROCKET</h3>
					</div>
			</div>
		</div>
  </section>
  
 

	<!-----------------FOOTER----------------------------->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body>
</html>