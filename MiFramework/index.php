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
		<?php
			// los comentarios en PHP inician con // o #
			$Saludo = "Hola Mundo";
			"<br>"
			# 'Este es un saludo: $saludo' --> asi no imprime el saludo	
 		?>
		<h1>
		<?php echo $Saludo; 
					
					echo "1.- Este es un saludo: $Saludo <br>";
					# concatenar variables
					echo '2.- Este es un saludo: ' . $Saludo . '<br>';
					# forma explicita e imprimir una variable
					echo "3.- Imprimiendo saludo: {$Saludo} <br>";
				?>
			
		</h1>

		 
    	<br><br>
		<?php echo "Este es mi primer Framework";	
		?>
	</header>

</body>
</html>


