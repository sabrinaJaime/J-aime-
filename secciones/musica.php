<?php

$productos = [

	[
		"imagen"=>"../css/imagenes/musica3.jpg",
		"titulo"=>"Guitarra 1",
		"precio"=>"$650"
	],

	[
		"imagen"=>"../css/imagenes/musica5.jpg",
		"titulo"=>"Guitarra 2",
		"precio"=>"$700"
	],

];

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>J'AIME</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js" =""></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">


</head>
<body>


	<!-----------------LOGO----------------------------->
	<div class="container">
		<div class="row">
			<div class="logo">
					<div class="col-sm-12">
						<a href="../index.html"><img src="../css/imagenes/logonuevosinsombra.png"></a>
					</div>
			</div>
		</div>
	</div>
	<!-----------------LOGO----------------------------->

	<!-----------------MENU----------------------------->
		<div class="container menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<!-------------------INICIO SESION---------------------------->
  			<a href=""><i class="fas fa-users carrito"></i></a>
  			<!-------------------INICIO SESION---------------------------->
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
          <a class="dropdown-item" href="cocina.php">Cocina</a>
          <a class="dropdown-item" href="infantil.php">Infantil</a>
          <a class="dropdown-item" href="frases.php">Frases</a>
          <a class="dropdown-item" href="zen.php">Zen</a>
          <a class="dropdown-item" href="musica.php">Música</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ/preguntasFrecuentes.html">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.html">Contacto</a>
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
						<a href="../index.html"><img src="../css/imagenes/banner.png"></a>
					</div>
			</div>
		</div>
	</div>
	<!-----------------BANNER----------------------------->

	<section class="catalogo">
	<div class="container productos">
		<h3>MÚSICA</h3>
		<br>
		<div class="row">


			<?php foreach ($productos as $key => $value): ?>
				<div class="col-md-3 col-sm-12">
					<img src="<?=$value["imagen"]?>" alt=" ">
					<h3><a href=""><?= $value['titulo'] ?></a></h3>
					<p><a href="#"><?= $value['precio'] ?></a></p>
				</div>
			<?php endforeach; ?>

			</div>
		</div>
	</section>


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
