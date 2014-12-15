
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
		
			$ciudades = array (
			
				'Reino Unido'=> 'Londres',
				'Estados Unidos'=> 'Wachington',
				'España'=> 'Madrid',
				'Francia'=> 'París'
			
			);
			
			echo '<ul>';
			
				foreach ($ciudades as $key => $c) {
					
					echo '<li>';
				
					echo $c . ' es la capital de '.$key;
			
					echo '</li>';
				}
			
		
		    echo '</ul>';
			
				
		    ?>
		    
			

		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
