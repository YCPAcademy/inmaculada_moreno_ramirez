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
						
			$mysqli = new mysqli ('localhost', 'root', "", 'ventas');
			if ($mysqli === FALSE){
				die ("Error al conectar con la base de datos".mysqli_connect_error());
			}
			
				if(isset($_GET['id_venta'])){
					
					$sql="DELETE FROM ventas WHERE id_venta =".$_GET["id_venta"]."";
				
				
				if ($mysqli -> query($sql) === TRUE){
									
										$mysqli->close();
									    header("Location:practica_2_bbdd.php"); //redireccionamiento directo sin necesidad de dar a ningún link
										
							}else{
							    
								echo "Error al añadir el registro".$mysqli->error();
							}
					}
			?>
	
		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
