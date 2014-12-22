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
					<form class="form-horizontal" role="form">
						
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
							<div class="col-sm-10">
								<input name="name" type="text" class="form-control" id="inputEmail3">
							</div>
						</div>
						
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input name="email" type="text" class="form-control" id="email">
							</div>
						</div>
						
						<div class="form-group">
							 <label for="inputPassword3" class="col-sm-2 control-label"></label>
							<div class="col-sm-10">
								<textarea placeholder="comentario" class="form-control" id="comentario" name="comentario"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							
							<div class="checkbox">
								
							  <label>
							    <input name="check_1" type="checkbox" value="Opción 1">
							    Opción 1
							  </label>
							</div>
							
							<div class="checkbox">
							  <label>
							    <input name="check_2" type="checkbox" value="Opción 2">
							   Opción 2
							  </label>
							</div>
							
						</div>
						
						<div class="form-group">
							
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Opción 1" checked>
							    Opción 1
							  </label>
							</div>
							
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Opción 2" checked>
							    Opción 2
							  </label>
							</div>
							
						</div>
						
						<div class="form-group">
							
							<select name="select" class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
							
						</div>
						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								 <button type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
