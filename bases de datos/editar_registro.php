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
			
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Formulario ventas
			</h3>
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
					<form method="post" class="form-horizontal" role="form">
						
					  <?php
						
						$mysqli = new mysqli ('localhost', 'root', "", 'ventas');
								if ($mysqli === FALSE){
										die ("Error al conectar con la base de datos".mysqli_connect_error());
							}
								
						$sql = "SELECT * FROM ventas WHERE id_venta=".$_GET['id_venta'];
						
						if ($result =$mysqli -> query ($sql)){
							if ($result -> num_rows >0){
						
						      	$row = $result -> fetch_assoc();
						       
						echo '<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">fecha</label>
							<div class="col-sm-10">
								<input value="'.date ("d-m-Y",strtotime($row ["dia_venta"])).'" name="dia_venta" type="text" class="form-control" id="inputEmail3">
							</div>
						</div>
						
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">ciudad</label>
							<div class="col-sm-10">
								<input value="'.$row ["ciudad_venta"].'" name="ciudad_venta" type="text" class="form-control" id="ciudad">
							</div>
						</div>
						
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">número de ventas</label>
							<div class="col-sm-10">
								<input value="'.$row ["num_venta"].'" name="num_venta" type="text" class="form-control" id="numero">
							</div>
						</div>';
						
					
						   }
					     }
						
						if(isset($_POST['submit'])){
							
							$sql = "UPDATE ventas SET dia_venta = '".date('Y-m-d',strtotime($_POST["dia_venta"]))."', ciudad_venta = '".$_POST ["ciudad_venta"]."
							',num_venta =".$_POST["num_venta"]."" ;
							
							if ($mysqli -> query($sql) === TRUE){
									
										$mysqli->close();
									    header("Location:practica_2_bbdd.php"); //redireccionamiento directo sin necesidad de dar a ningún link
										
							}else{
							    
								echo "Error al añadir el registro".$mysqli->error();
							}
			
						}
								
						?>
						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								 <button name="submit" type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
					
		
			
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
