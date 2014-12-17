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

		<link rel="shortcut icon" href="/favicon.ico" />
		
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
	</head>

	<body>
			 
		
		<?php
		
		  $cp = '41700'; //lo hemos capturado de un formulario.
		  $pattern="/^[0-9]$/"; //esto no comprobaría que tiene 5 dígitos.
		  //Strlen()//nos devuelve el número de caracteres que es no puede ser mayor de 5.
		  echo strlen($cp);
		  if(strlen($cp)==5 AND preg_match($pattern, $cp)){
		  	echo "el código postal es correcto.";
		  	
		  }else{
		  	 echo "el código postal es erróneo.";
		  }
		  
		  $dni ="4887647ky";
		  $pattern="/^[0-9]+[a-z]$/";
		  if(strlen($dni)==9 AND preg_match($pattern, $dni)){
		  	echo "el din es correcto.";
		  	
		  }else{
		  	 echo "el din es erróneo.";
		  }
									
		?>

		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
