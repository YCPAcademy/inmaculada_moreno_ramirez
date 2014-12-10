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
		
	
			for ($i=1; $i<=100; $i++){
				echo $i;
			}
			
			for ($x=1, $y=1, $z=1; $y<10, $z<10; $x++,$y=$y+2,$z=$z+3){
				echo "$x,$y,$z <br/>";
				
			}	
			
			$day = "martes";
			
			switch ($day) {
				case 'lunes':
					echo "hoy es ".$day;
					break;
				
				case 'martes':
					echo "hoy es ".$day;
					break;
					
				case 'miércoles':
					echo "hoy es ".$day;
					break;
					
				case 'jueves':
					echo "hoy es ".$day;
					break;
				
				case 'viernes':
					echo "hoy es ".$day;
					break;
				
				case 'sábado':
					echo "hoy es ".$day;
					break;
				
				case 'domingo':
					echo "hoy es ".$day;
					break;
					
				default:
					
					break;
			}
			
		?>
		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
