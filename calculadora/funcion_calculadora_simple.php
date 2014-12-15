<?php
			
	
	/*
	 * Vamos a crear una función que haga las veces de una calculadora muy simple.
	 * Esta función tiene que admitir tres parametros, dos de ellos serán los números, el otro 
	 * los operadores que serán: + - * /.
	 * 
	 * Esta función tiene que comprobar dos cosas para que el usuario entienda en el caso de hacer 
	 * algo mal, donde esté el error.
	 * 1. Que los dos primeros parametros sólo pueden ser integer.
	 * 2. Que el operador es obligatorio y que en el caso de no utilizarlo en la función o que el 
	 * operador no sea el adecuado pues muestre sendos errores
	 * 
	 * Al final si todo ha ido bien, return la operación.
	 * 
	 * Nota: puedes poner la variable para los operadores al final y esta inicializarla a FALSE ($a,$b;$operador = FALSE).
	 * Otra pista, los operadores... switch.. hay te lo dejo:).
	 * 
	 * Esta es una práctica un poco mas compleja, si tienes dudas es normal y no te preocupes porque lo vamos a ver 
	 * el lunes, quiero que intentes reswolverlo estoy seguro que lo haras muy bien.
	 */
	
	function calculadora ($a,$b,$operador = FALSE){
	
		if(gettype ($a) != "integer"){ // compruebo si el primer parámetro es un entero.
			
			echo "El primer parámetro introducido no es un número entero. ";
		}
			
		if(gettype ($b) != "integer"){ // compruebo si el segundo parámetro es un entero.
				
			echo "El segundo parámetro introducido no es un número entero. ";
		
		}
		
		if(gettype ($operador) != "string"){ // compruebo si el tercer parámetro es un string, en caso de que sea vacío, entraría aquí porque lo he inicializado a FALSE.
			 									 
			echo "El tercer parámetro introducido no es un operador válido: +, -, *, /. ";
		
		}
		
		else if ($operador == "+" OR $operador == "-" OR $operador == "*" OR $operador == "/"){
		
		
			if (gettype ($a) == "integer" AND gettype ($b) == "integer"){
			
				switch ($operador) {
					
					case '+':
						return $a+$b;
						break;
				
				    case '-':
						return $a-$b;
						break;	
					
				    case '*':
						return $a*$b;
						break;
				
					case '/':
						return $a/$b;
						break;
						
				  }
				}
			
		}
		
		else { // en el caso de que sea un string pero no sea un operador válido.
			return "El tercer parámetro introducido no es un operador válido: +, -, *, /. ";
		}
		
	  }
?>

		