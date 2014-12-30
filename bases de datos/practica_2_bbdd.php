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
			
			$sql = "SELECT id_venta, dia_venta FROM ventas";
			
				if ($result =$mysqli -> query ($sql)){
					if ($result -> num_rows >0){
						while ($row = $result -> fetch_array ()){
							
							echo $row ["id_venta"]."</br>";
							echo $row ["dia_venta"]."</br>";
							echo '<a href="ver_registro.php?id_venta='.$row ["id_venta"].'">ver registro</a>';
							echo "<hr>";	
						}
						
					}else{
						
						echo "No se han encontrado registros.";
					}
					
				}else{
					echo "Error no fue posible ejecutar".$sql.$mysqli->error();
				}
			
			$mysqli->close();
						
			?>
	
		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>