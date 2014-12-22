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
			// define una matriz forma más clásica
			$frutas = array('manzana', 'plátano', 'piña', 'uva');
			
			echo $frutas[1];
		?>
		
		<?php
			// define una matriz asignación directa
			$coche[0] = 'Ferrari';
			$coche[1] = 'Porsche';
			$coche[2] = 'Jaguar';
			$coche[3] = 'Lamborghini';
			$coche[4] = 'Mercedes';
			
			echo $coche[3];
		?>
		
		<?php
		// define una matriz combinando las dos formas clave valor
			$datos = array(
			'nombredeusuario' => 'juan',
			'contrasena' => 'secreta',
			'servidor' => '192.168.0.1'
			);
			
			echo $datos['nombredeusuario'];
		?>
		
		<?php
			// define matrices anidadas
			$directorio = array(
				array(
					'nombre' => 'Raymundo Rabbit',
					'tel' => '1234567',
					'correo' => 'ray@planetaconejo.in',
				),
				array(
					'nombre' => 'David Duck',
					'tel' => '8562904',
					'correo' => 'dduck@lagodepatos.corp',
				),
				array(
					'nombre' => 'Omar Horse',
					'tel' => '5942033',
					'correo' => 'reyomar@mercadodelgranjero.cosasdecaballos.com',
				)
			);
			
			// accede al valor anidado
			echo "El número telefónico de David Duck es: " . $directorio[1] ['tel'];
			
			for ($i=0; $i < count($directorio) ; $i++) { 
				
				echo "<br/>El número telefónico de ".$directorio[$i] ['nombre']."es: " . $directorio[$i] ['tel']."<br/>";
			}
		?>
		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
