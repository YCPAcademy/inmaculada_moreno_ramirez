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
				 * Crea un script que genere desde el 0 hasta el 100 de forma que estos se agrupen en filas de 10, 
				 * es decir que cada diez números generes un párrafo nuevo, así cada párrafo HTML tendrá 10 números
				 * Ej.. <p>0 1 2 3 4 5 6 7 8 9 </p>. Además de todo esto, necesito que los números pares e impares tengan
				 * tengan colores distintos.
				 */
				 
				 $cont=0;
				 for ($i=0; $i<=100; $i++){
				 			 		
					if ($i%2==1){ // si el módulo de un número es 1 es porque es impar.
						if ($cont<=9){ // contador para separar por párrafos lo que imprimimos.
							echo '<font color="blue">'.$i.' </font>';
							$cont++;
						}
						else{
							echo "<br/>";
							echo '<font color="blue">'.$i.' </font>';
							$cont=1;
							
						}
				    }
					
				    else{ // si el módulo de un número es 0 es porque es par.
				    
				    	if ($cont<=9){
							echo '<font color="red">'.$i.' </font>';
							$cont++;
							
						}
						else{
							echo "<br/>";
							echo '<font color="red">'.$i.' </font>';
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
