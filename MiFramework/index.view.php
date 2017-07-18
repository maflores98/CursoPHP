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
			<h1> CONDICIONALES </h1>
			<br>
	</header>
	
	<main>
		<h2>Tareas NO realizadas</h2>
		<ul>
			<?php foreach($tareas as $tarea): ?>
				<!-- se puede utilizar la palabra continue para que si la condicion se cumple, se salta el bloque dentro del if, y ya no necesita marcar el endif ejemplo: El siguiente codigo mostrara solo las tareas no realizadas--> 

				<?php if($tarea['completado'] === true) continue; ?>
					<li>
						Tarea: <?= $tarea['tarea']; ?> <br>
						Asignado: <?= $tarea['asignado']; ?> <br>
						Fecha: <?= $tarea['fecha']; ?> <br>
						Completado:  <?= ($tarea['completado'] === true) ?'REALIZADO' : 'NO REALIZADO'; ?>
					</li>
					<br>

				<?php endforeach; ?>
		</ul>

		<h2>Tareas realizadas</h2>
		<ul>
			<?php foreach($tareas as $tarea): ?>
				<!-- se puede utilizar la palabra continue para que si la condicion se cumple, se salta el bloque dentro del if, y ya no necesita marcar el endif ejemplo: El siguiente codigo mostrara solo las tareas  realizadas--> 

				<?php if($tarea['completado'] !== true) continue; ?>
					<li>
						Tarea: <?= $tarea['tarea']; ?> <br>
						Asignado: <?= $tarea['asignado']; ?> <br>
						Fecha: <?= $tarea['fecha']; ?> <br>
						Completado:  <?= ($tarea['completado'] === true) ?'REALIZADO' : 'NO REALIZADO'; ?>
					</li>
					<br>

				<?php endforeach; ?>
		</ul>
	</main>

	<footer>
	 	<h1><?= 'CONDICIONALES IF'  ?><h1>
	</footer>



</body>
</html>

<!-- url paraprobar este codigo : 
http://miframework.com:8000/?saludo=Hola&nombre=Alejandro&edad=<h2>40</h2>
-->
