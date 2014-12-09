<?php

	/*
	 * Práctica que consiste en crear dos variables, una de tipo integer con un número y la otra de tipo string también con un número.
	 * NOTA: Además de estas crear si es necesario más variables, analiza bien el script y decide como crees que es mejor.
	 * Realizar la comprobación de la variable de tipo string y verificar si es de tipo entero, 
	 * en caso de ser falso, realizar una conversión de dicha variable a integer y mostrar un mensaje que diga "la variable ha sido modificada a entero".
	 * Finalmente realizar una suma entre las dos y mostrarla en pantalla.
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
	
		
?>