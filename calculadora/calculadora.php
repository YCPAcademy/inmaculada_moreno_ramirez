<?php

function calculadora($a,$b,$operation = FALSE){
	
	if(is_integer($a) AND is_integer($b)){
		
		$result = 0;
			
		switch ($operation) {
		
			case '+':
				
				$result = $a + $b;
				break;
				
			case '-':
				
				$result = $a - $b;
				break;
				
			case '*':
				
				$result = $a * $b;
				break;
				
			case '/':
				
				$result = $a / $b;
				break;
				
			case FALSE:
				
				return 'Error, no ha indicado ninguna operación';
				break;
				
			default:
				
				return 'Error, la operación no se reconoce';
				break;
		}
			
		return $result;
	
	}else{
		
		return 'Error, uno o los dos paramentos no son enteros';
	}
	
}
				
?>
