<?php
		
		
		function validarFormulario ($array_datos){
			
			if (is_array($array_datos) AND !empty($array_datos)){ //compruebo que el parámetro de entrada es un array y que no está vacío.
			
				$cont=1;
			
				for ($i=0;$i<count($array_datos);$i++){ //recorro el array.
				
					if (is_string($array_datos[$i])){
						 
						if ($cont==count($array_datos)){ //creo este contador para verificar que el array completo contiene sólo elementos string.
							
						$pattern="/^[a-z]+$/i"; //para validar un nombre.
						//$pattern_1="/^[a-z]+[0-9]+[_\.\-]+@[a-z]+[0-9]+[_\.\-]+\.[a-z]{2,4}+$/";//para validar un email.
						$pattern_1="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
						
							if(preg_match($pattern, $array_datos[0]) AND preg_match($pattern_1, $array_datos[1])){ 
							 		
								return "Datos introducidos válidos.";
								
							}else{
							 	
								return "Datos introducidos no válidos.";
							}
						}
						
						$cont++;
						
					}else{
						
						return "No es un array válido.";
					}
			    }
				
			}
			
			else{
				
				return "El array está vacío.";
			}		
			
		}
?>
		

