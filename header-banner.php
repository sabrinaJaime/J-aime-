<?php

session_start();


?>

<body>


	<!-----------------LOGO----------------------------->
	<div class="container">
		<div class="row">
			<div class="logo">
					<div class="col-sm-12">
						<a href="indexx.php"><img src="CSS/Imagenes/logonuevosinsombra.png"></a>
					</div>
			</div>
		</div>
	</div>
	<!-----------------LOGO----------------------------->

	<!-----------------MENU----------------------------->
		<div class="container menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<!-------------------INICIO SESION---------------------------->


      <?php if (!isset ($_SESSION["emailUsuario"])) { ?>
			  <a href="login-out/logIn.php"><i class="fas fa-users carrito"></i></a>
			  <?php } else { ?>
				<button type="button" class="btn btn-outline-success active" title="<?php echo $_SESSION["nombreUsuario"]?>">ON</button>
				<button type="submit" href="login-out/logout.php" class="btn btn-outline-danger" title="Cerrar Sesion" ><a href="login-out/logout.php"> OFF</a></button>
        <?php } ?>


  			<!-------------------INICIO SESION---------------------------->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexx.php">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="secciones/cocina.php">Cocina</a>
          <a class="dropdown-item" href="secciones/infantil.php">Infantil</a>
          <a class="dropdown-item" href="secciones/frases.php">Frases</a>
          <a class="dropdown-item" href="secciones/zen.php">Zen</a>
          <a class="dropdown-item" href="secciones/musica.php">Música</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ/preguntasFrecuentes.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>

    </ul>

      <i class="fas fa-shopping-cart carrito"></i>

  </div>
</nav>
<hr>
</div>

	<!-----------------MENU----------------------------->

	<!-----------------BANNER----------------------------->
	<div class="container">
		<div class="row">
			<div class="banner">
					<div class="col-sm-12">
						<a href="index.html"><img src="CSS/Imagenes/banner.png"></a>
					</div>
			</div>
		</div>
	</div>
