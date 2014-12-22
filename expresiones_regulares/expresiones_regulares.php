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

	$cadena = "hola como estas";
	//echo $cadena[3];
	
	$cadena = <<<INICIO
		Esto es un string de multiples lineas,
		podemos meter etiquetas <strong>html</strong> y todo.
INICIO;
	
	//echo $cadena;
	
	$subject = 'bgar_cia@ycomieronperdices.com';
	$pattern = "/^[a-z|\.|\_|\-]+@+[a-z|\.\_\-]+\.(org|com)$/";
	if(preg_match($pattern, $subject)){
		
		//echo 'Bien';
		
	}else{
		
		//echo 'Mal';
	}
	
	$dni = '48877890S';
	$pattern = "/^[0-9]{8}+[a-z]{1}$/i";
	
	if(preg_match($pattern, $dni)){
		
		echo 'Bien';
		
	}else{
		
		echo 'Mal';
	}
	
	$cp = '41700';
	$pattern = '/^[0-9]{5}$/';
	
	if(preg_match($pattern, $cp)){
		
		echo 'Bien';
		
	}else{
		
		echo 'Mal';
	}

?>

		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
