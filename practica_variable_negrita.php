<!DOCTYPE html>

<html lang="en">
	
	<head>
		
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>HTML</title>
		
		<meta name="description" content="" />
		
		<meta name="author" content="usuario" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
	</head>

	<body>
		
		<?php
			
			/*
			 * Como ya hemos tratado, hay muchas formas de llegar a un mismo fin, lo que has realizado esta muy bien.
			 * y se consigues lo que se te solicitaba, pero vamos a ver otra forma que aunque muy parecida, es más practica
			 * y solo utilizamos la concatenación cuando realmente es necesario.
			 */
			
		    $tu_nombre="Pablo";
			echo "Hola"."<b>"."&nbsp;".$tu_nombre."</b>"."&nbsp;"."encantado de conocerte.";
			
		?>
		
		<?php
		
			//This script saves a name in a variable and displays it with a text
			$name = "Pablo"; //This variable stores the name
			echo '<br/>Hola <strong>'.$name.'</strong> encantado de conocerte.'; //we print the message by concatenating the variable in position
 
		?>
		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
