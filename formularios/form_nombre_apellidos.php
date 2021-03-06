<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formulario Prácticas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Formulario Prácticas
			</h3>
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
					<form method="post" class="form-horizontal" role="form">
						
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
							<div class="col-sm-10">
								<input name="name" type="text" class="form-control" id="nombre">
							</div>
						</div>
						
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
							<div class="col-sm-10">
								<input name="apellidos" type="text" class="form-control" id="apellidos">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								 <button name="submit" type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
					
					<?php
					
						require dirname(__FILE__)."/funciones/formatea_nombre_apellidos.php";
						if(isset($_POST['name'])){
								
							
							echo formatea_nombre_apellidos ($_POST['name']);						
							
						}
						
						if(isset($_POST['apellidos'])){
								
							echo formatea_nombre_apellidos ($_POST['apellidos']);						
							
						}
						
					?>
					
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
