<?php

	/*
	 *Copiando la otra práctica, realiza las modificaciones necesarias para que cambiando manualmente la variable de tipo string, realice la suma, esta vez
	 * evidentemente sin necesidad de pasar por la conversión, ya que cuando realice la comprobación en el if() el programa verá que este es de tipo integer
	 * NOTA: Como siempre hablamos en clase, recuerda que hay muchas formas de llegar a la misma solución Cual será la tuya?. 
	 */
	
	$int = 8;
	$text = "7";
	$conver = 0;
	$sum = 0;
	
	
	if(gettype ($text) != "integer"){ //compruebo si la variable string es un entero.
		
		$conver = intval($text); //convierto a entero.
		echo "La variable ha sido modificada a entero.";
		$sum = $int + $conver; //sumo las dos variables del mismo tipo.
	    echo "$sum";
	}
	
	else{
		
	$sum = $int + $text; //sumo las dos variables del mismo tipo.
	echo "$sum";
		 	
    }
	
?>
	