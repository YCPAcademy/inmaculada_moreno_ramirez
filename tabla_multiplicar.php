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
			
				/*
				 * Crea un script que imprima por pantalla una tabla HTML que contenga la tabla de multiplicar, configura la tabla
				 * para que tenga border 1, y recuerda que esta tabla tendrá un tamaño de 10x10.
				 */
				 
				 $resul=0;
				 $cont=0;
				 
				 for ($i=1; $i<=10; $i++){ // esta variable es para las columnas.
				 	
				 	   for ($j=1; $j<=10; $j++){ // esta variable es para las filas.
				 	   	
							$resul=$i*$j; // multiplicamos la columna por la fila.
								if($cont<=9){ // utilizamos un contador para dibujar la tabla.
									
									echo "$resul ";
									$cont++;
										
								}
								else{
									
									echo "<br/>";
									echo "$resul ";
									$cont=1;
									
								}
						
					   }
					
				 }
				
			?>

		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
