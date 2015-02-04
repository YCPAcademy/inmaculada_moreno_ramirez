<?php

$country = simplexml_load_file("country.xml");

	foreach ($country->country as $value) {
		
		echo '<p>';
		echo $value -> iso .'<br/>';
		echo $value -> name;
		echo '</p>';


	}

?>