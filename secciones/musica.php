<?php

session_start();

$productos = [

	[	
		"seccion"=> "MUSICA",
		"imagen"=>"../css/imagenes/musica3.jpg",
		"titulo"=>"Guitarra 1",
		"precio"=>"$650",
		"enlace"=>"../productos/guitarra1.html"
	],

	[
		"imagen"=>"../css/imagenes/musica5.jpg",
		"titulo"=>"Guitarra 2",
		"precio"=>"$700",
		"enlace"=>"../productos/guitarra02.html"
	],

];

	include "header-banner.php";
	include "cuerpo-secciones.php";
	include "../footer.html";
	?>

	<!-----------------FOOTER----------------------------->






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
