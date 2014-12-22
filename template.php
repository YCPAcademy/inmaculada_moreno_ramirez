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
		
		include (dirname(__FILE__).'/calculadora/calculadora.php');
		
		echo calculadora(8,8,8);
		
	?>
			
			<?php
			
				function calculadora2($param = array(),$operation = FALSE){
					
					$result = $param[0];
					
					for ($i=1; $i < count($param) ; $i++) {
						
						if(is_integer($param[$i])){
							return $i;
							//return $result +=$param[$i];
						} 
						
						
						
						
					}
					
				}
				
				/*
				 * if(is_integer($param[$i])){
							
							if($operation){
								
								switch ($operation) {
							
								case '+':
									
									$result += $param[$i];
									
									break;
									
								case '-':
									
									$result -= $param[$i];
									
									break;
									
								case '*':
									
									$result *= $param[$i];
									
									break;
									
								case '/':
									
									$result /= $param[$i];
									
									break;
								
								}
								
								
								
							}else{
								
								return 'Error, no ha indicado ninguna operación';
								break;
							}
							
						}else{
							
							return 'Error, uno o los dos paramentos no son enteros';
							break;
							
						}
						
						
									
							return $i;
				 */
			?>
		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
