<section class="catalogo">
	<div class="container productos">
		<h3> <?= $productos[0]['seccion'] ?> </h3>
		<br>
		<div class="row">


			<?php foreach ($productos as $key => $value): ?>
				<div class="col-md-3 col-sm-12">
					<img src="<?=$value["imagen"]?>" alt=" ">
					<h3><a href="<?=$value["enlace"]?>"><?= $value['titulo'] ?></a></h3>
					<p><a href="<?=$value["enlace"]?>"><?= $value['precio'] ?></a></p>
				</div>
			<?php endforeach; ?>

			</div>
		</div>
	</section>