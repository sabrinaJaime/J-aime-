<?php

$dsn= "mysql:dbname=ecommerce;host=127.0.0.1;port=3306";
$user='root';
$pass='';

try{
  $conexion = new PDO ($dsn, $user, $pass);

}
catch (PDOException $exception){
  echo $exception -> getMessage();
}

$consulta=$conexion->prepare('SELECT * from productos limit 4 offset 4');
$consulta->execute();
$resultado=$consulta->fetchAll(PDO::FETCH_ASSOC)

 ?>

<section class="catalogo">
	<div class="container productos">
		<div class="row">
            <?php foreach ($resultado as $producto): ?>
					<div class="col-md-3 col-sm-12">
						<a href="<?=$producto["enlace"]?>"><img src="<?=$producto["imagen"]?>"></a>
						<h3><a href="<?=$producto["enlace"]?>"><?= $producto['nombre'] ?></a></h3>
						<p>$<a href="<?=$producto["enlace"]?>"><?= $producto['precio'] ?></p>
                    </div>
            <?php endforeach; ?>
            	</div>
		</div>

		

	</section>