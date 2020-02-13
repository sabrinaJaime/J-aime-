<?php

$productos = [

	[
		"imagen"=>"CSS/Imagenes/zen3.jpg",
		"titulo"=>"Mandala 03",
		"precio"=>"$560.00",
		"enlace"=> "productos/mandala03.html"
	],

	[
		"imagen"=>"CSS/Imagenes/musica5.jpg",
		"titulo"=>"Guitarra 02",
		"precio"=>"$810.00",
		"enlace"=> "productos/guitarra02.html"
	],

	[
		"imagen"=>"CSS/Imagenes/frases1.jpg",
		"titulo"=>"Frase 01",
		"precio"=>"$475.00",
		"enlace"=> "productos/frases01.html"
	],

	[
		"imagen"=>"CSS/Imagenes/infantil4.jpg",
		"titulo"=>"Infantil 02",
		"precio"=>"$635.00",
		"enlace"=> "productos/infantil02.html"
	],

	[
		"imagen"=>"CSS/Imagenes/cocina4.jpg",
		"titulo"=>"Condimentos",
		"precio"=>"$505.00",
		"enlace"=> "productos/condimentos.html"
	],

    [
		"imagen"=>"CSS/Imagenes/cocina1 (1).jpg",
		"titulo"=>"Bon Appetit",
		"precio"=>"$585.00",
		"enlace"=> "productos/bonappetit.html"
	],

    [
		"imagen"=>"CSS/Imagenes/cocina5.jpg",
		"titulo"=>"Bon Appetit!",
		"precio"=>"$480.00",
		"enlace"=> "productos/Bon Appetit!.html"
	],

     [
		"imagen"=>"CSS/Imagenes/cocina6.jpg",
		"titulo"=>"El arte de cocinar",
		"precio"=>"$530.00",
		"enlace"=> "productos/elartedecocinar.html"
	],

    


];

 ?>

<section class="catalogo">
	<div class="container productos">
		<div class="row">
            <?php foreach ($productos as $key => $value): ?>
					<div class="col-md-3 col-sm-12">
						<a href="<?=$value["enlace"]?>"><img src="<?=$value["imagen"]?>"></a>
						<h3><a href="<?=$value["enlace"]?>"><?= $value['titulo'] ?></a></h3>
						<p><a href="<?=$value["enlace"]?>"><?= $value['precio'] ?></p>
                    </div>
            <?php endforeach; ?>
            	</div>
		</div>

		

	</section>