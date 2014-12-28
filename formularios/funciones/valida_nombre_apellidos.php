<?php
	
	
		function valida_nombre_apellidos ($data = array()){
		
		$msj = ""; // mensaje que mostramos.
		$num_item_array = count($data);// items que tiene el array.
		
		foreach ($data as $key => $value) {
			
			if(empty($data[$key])){
				
				unset($data[$key]);
			}
		}
		
		if($num_item_array > count($data)){
			
			$msj = 'Todos los campos son obligatorios.';
			
		}else{
			
			if(isset($data['nombre']) AND $msj ==""){
				
				if(preg_match('/^[a-zA-Z\-_]{4,15}$/i', $data['nombre'])){
					
					echo ucfirst (strtolower ($data['nombre']));
					
				}else{
					
					$msj = 'El nombre no tiene un formato válido.';
				}
				
			}
			
			
			if(isset($data['apellidos']) AND $msj ==""){
				
				if(preg_match("/^\s*([\pL\w\s]+)\s*([\pL\w\s-]+)\s*$/u", $data['apellidos'])){
					
					echo ucwords (strtolower ($data['apellidos']));
					
				}else{
					
					$msj = 'Los apellidos no tienen un formato válido.';
				
				}

			}
			
			
		}
		
		
		return $msj;
	}
					
					
						
			
		
?>





							