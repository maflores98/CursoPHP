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
			<h1> CONDICIONALES </h1>
			<br>
	</header>
	
	<main>
		<h2>Tareas</h2>
		<ul>
			<?php foreach($tareas as $tarea): ?>
			<li>
				Tarea: <?= $tarea['tarea']; ?> <br>
				Asignado: <?= $tarea['asignado']; ?> <br>
				Fecha: <?= $tarea['fecha']; ?> <br>
<!--
				Completado: 
					<?php if($tarea['completado']): ?> 
						TAREA REALIZADA
					<?PHP else: ?>
						TAREA INCOMPLETA
					<?php endif; ?>
-->

<!--  Tambien se puede escribir de la siguiente forma, 

					Completado: 
					<?php if($tarea['completado']) { ?> 
						TAREA REALIZADA
					<?PHP } else { ?>
						TAREA INCOMPLETA
					<?php } ?>
-->

<!-- Tambien se puede escribir de la siguiente forma

					Completado: 
					<?php if($tarea['completado'] === true): ?> 
						TAREA REALIZADA
						<?php elseif ($tarea['completado'] === false): ?>
						TAREA INCOMPLETA
						<?php else: ?>
						NO TIENE VALOR
					<?php endif; ?>
-->


<!-- tambien se puede escribir de la siguiente forma  QUE SE LLAMA OPERADOR TERNARIO--> 
					Completado: 
					<?= ($tarea['completado'] === true) ?'TAREA REALIZADA' : 'TAREA NO REALIZADA' ; ?>


			</li>
			<br>
			<?php endforeach; ?>

		</ul>
	</main>

	<footer>
	</footer>



</body>
</html>

<!-- url paraprobar este codigo : 
http://miframework.com:8000/?saludo=Hola&nombre=Alejandro&edad=<h2>40</h2>
-->
