<?php

session_start();

$productos = [

	[	
		"seccion"=> "COCINA",
		"imagen"=>"../css/imagenes/cocina2.jpg",
		"titulo"=>"Receta",
		"precio"=>"$650",
		"enlace"=> "../productos/receta.html"
	],

	[
		"imagen"=>"../css/imagenes/cocina4.jpg",
		"titulo"=>"Condimentos",
		"precio"=>"$600",
		"enlace"=> "../productos/condimentos.html"
	],

	[
		"imagen"=>"../css/imagenes/cocina5.jpg",
		"titulo"=>"Bon Appetit!",
		"precio"=>"$750",
		"enlace"=> "../productos/Bon Appetit!.html"
	],

	[
		"imagen"=>"../css/imagenes/cocina6.jpg",
		"titulo"=>"El arte de cocinar",
		"precio"=>"$550",
		"enlace"=> "../productos/elartedecocinar.html"
	],

	[
		"imagen"=>"../css/imagenes/coina3.jpg",
		"titulo"=>"Cocina",
		"precio"=>"$700",
		"enlace"=> "../productos/cocina.html"
	],


];

include "header-banner.php";
include "cuerpo-secciones.php";
include "../footer.html";

?>	
