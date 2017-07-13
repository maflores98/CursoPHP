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
	</style>
</head>

<body>
	<header>
			<h1> <?php echo $saludo . " " . $nombre;  ?> </h1>
			<br>
			<?php echo $edad;?> 
					
	</header>

</body>
</html>

<!-- url paraprobar este codigo : 
http://miframework.com:8000/?saludo=Hola&nombre=Alejandro&edad=<h2>40</h2>
-->
