
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
		
			$directorio = array ( 
			
				array (
					'name'=>'Juan',
					'telefono'=>'999999999',
					'email'=>'juan@gmai.com'
				), 
				
				 array (
				 	'name'=>'David',
					'telefono'=>'900552233',
					'email'=>'david@gmai.com'
				),
				
				 array (
					'name'=>'Pablo',
					'telefono'=>'988552211',
					'email'=>'pablo@gmai.com'
				)
				
			);
			
			//echo 'el número de teléfono de '.$directorio[1]['name'].' es '. $directorio [1]['telefono'];
			
			echo '<ul>';
			
			/*for ($i=0;$i<count($directorio);$i++){ 
				
				echo '<li>';
			
				echo 'el número de teléfono de '.$directorio[$i]['name'].' es '. $directorio [$i]['telefono'];
				
				echo '</li>';
			}*/
			
			
			
			echo '</ul>';
				
		    ?>
		    
			

		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
