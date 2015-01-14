<?php
	
	
	function formatea_nombre_apellidos ($text){
		
		$msj = ""; // mensaje que mostramos.

				if(preg_match('/^[a-zA-Z\-_]{4,15}$/i', $text)){
					
					$msj = ucfirst (strtolower ($text));
					
				}else{
					
					$msj = 'El nombre no tiene un formato válido.';
				}
				
			
			
			
				
				if(preg_match("/^\s*([\pL\w\s]+)\s*([\pL\w\s-]+)\s*$/u", $text)){
					
					$msj = ucwords (strtolower ($text));
					
				}else{
					
					$msj = 'Los apellidos no tienen un formato válido.';
				
				}
			
		return $msj;
	}
					
					
						
			
			
		
?>





							