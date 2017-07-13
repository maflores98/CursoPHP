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
			<h1> ARREGLOS ASOCIATIVOS </h1>
			<br>
	</header>
	
	<main>
	<?php foreach($persona as $llave => $valor) {	?>
	<p> <?= $llave . ': '. $valor ?> </p>
	<?php } ?>
		

	<!-- para testear un arreglo -->
	<pre>
	<?php var_dump($tareas); ?>	
	</pre>

	<h1>Tareas</h1>

	<ul>
	<?php foreach($tareas as $tarea) { ?>
		<li>
			<p>Tarea: <?= $tarea['Tarea']; ?></p>
			<p>Asignado a: <?= $tarea['Asignado']; ?></p>
			<p>Fecha: <?= $tarea['Fecha']; ?></p>
		</li>
	<?php } ?>
	</ul>

	</main>

	<footer>
	</footer>



</body>
</html>

<!-- url paraprobar este codigo : 
http://miframework.com:8000/?saludo=Hola&nombre=Alejandro&edad=<h2>40</h2>
-->
