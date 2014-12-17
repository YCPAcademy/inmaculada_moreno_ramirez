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
		
		 	$a="a,b,c,d";
		 	$a=explode(",", $a);
			//echo $a;
		 	$a=implode("y", $a);
			//echo $a;
			$b=range(1,1000);
			//echo $b[37];
			
			$c = array("a","b","c","d");
			if(in_array("b",$c)){
				//echo "existe";
			}else{
				//echo "no existe";
			}
			
			$d = array ("a","b","c","d","b","d");
			$e= array_unique($d);
			for ($i=0;$i<count($e);$i++){
				//echo $e [$i];
			}
				
			$f = array ("a","b","c","d","b","d");	
			array_unshift($f, "e");
			for ($i=0;$i<count($f);$i++){
				echo $f[$i];
			}
			
									
		 ?>

		
		<footer>
			
			<p>&copy; 2014 Copyright  YCP</p>
		
		</footer>

	</body>
	
</html>
