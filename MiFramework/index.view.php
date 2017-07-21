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
			h1 {color: orange;}	
			h2 {color: blue;					}
	</style>
</head>

<body>
	<header>
			<h2> TAREAS </h2>
			<br>
	</header>
	
	<main>
		<?php foreach($tareas as $tarea): ?>
			<li> 
				<?= $tarea->getDescripcion(); ?>
				<?= $tarea->getAsignado(); ?>
				<?= $tarea->getCompletado(); ?>
				<?= $tarea->getFecha(); ?>
			</li>
		<?php  endforeach; ?>

<br>

		<?php foreach($asignados as $asignado): ?>
			<li> 
				<?= $asignado->getNombre(); ?>
				<?= $asignado->getPuesto(); ?>
			</li>
		<?php  endforeach; ?>

	</main>

	<footer>
	 	<h1><?= 'FIN TAREAS'  ?><h1>
	</footer>



</body>
</html>

<!-- url paraprobar este codigo : 
http://miframework.com:8000/?saludo=Hola&nombre=Alejandro&edad=<h2>40</h2>
-->
