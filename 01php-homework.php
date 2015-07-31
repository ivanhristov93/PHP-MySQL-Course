<?php
	$array = array("Mercedes", "Seat", "Renault", "Opel", "Mazda");

	$array[] = "BMW";

	$size = count($array);

	for($i = 0; $i < $size; $i++)
	{
		echo "<p>Искам да си купя " . $array[$i] . "!</p>";
	}
	unset($array[5]);
	echo "<br />";
	echo "<p>Ще си купя" . $array[0] . "</p>";
	echo "<p>Ще си купя" . $array[1] . "</p>";
	echo "<p>Ще си купя" . $array[2] . "</p>";
	echo "<p>Ще си купя" . $array[3] . "</p>";
	echo "<p>Ще си купя" . $array[4] . "</p>";