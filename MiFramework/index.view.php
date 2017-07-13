<!DOCTYPE html>
<html>
<head>
	<!--En HTML los comentarios se encierran como esta linea -->
	<meta charset="UTF-8">
	<title>MiFramework PHP</title>
	<style>
		header {
			background: #1E4B6A;
			padding: 1em;
			text-align: center;
			}	
			h2 {
				color: blue;
			}
	</style>
</head>

<body>
	<header>
			<h1> ARREGLOS </h1>
			<br>
	</header>
	
	<main>

		<h2>Nombres;</h2>
		<ul> <!-- lista no ordeneda-->
			<?php foreach($nombres as $nombre) { ?>
				<li> <?= $nombre ?> </li>
				<!-- tambien se puede escribir asi-->
				<li> <?php echo $nombre ?> </li>
				<!-- li se usa para dar formato de lista  -->
			<?php } ?>
		</ul>

		<h2>Animales;</h2>
		<ol> <!-- lista ordeneda, le agrega un indice a cada valor-->
			<?php foreach($animales as $animal) : ?>
				<li> <?= $animal ?> </li>
				<!-- tambien se puede escribir asi-->
				<li> <?php echo $animal ?> </li>
				<!-- li se usa para dar formato de lista  -->
			<?php endforeach; ?>
		</ol>

		<p> <?php echo $dato; ?> </p>
		<p> ¿Existe? <?php echo $existe; ?></p>



	</main>

	<footer>
	</footer>


</body>
</html>

<!-- url paraprobar este codigo : 
http://miframework.com:8000/?saludo=Hola&nombre=Alejandro&edad=<h2>40</h2>
-->
