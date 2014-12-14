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
		
		
			echo modificar_suma("5", "9");
					
		?>
		
		<?php
		
		 	function modificar_suma($a,$b){
		 		
				$sum = 0;
		 		
				if(gettype ($a) != "integer"){
						
					$a = intval($a); //convierto a entero.
					
				 
				}
				
				if (gettype ($b) != "integer"){ //compruebo si la variable string es un entero.
		
					$b = intval($b); //convierto a entero.
					
				}
				
								
				$sum = $a + $b; //sumo las dos variables del mismo tipo.
				return $sum;
						 	
			    
		 	}
		
		?>
		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
