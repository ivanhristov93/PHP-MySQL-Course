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
	$size = count($array);
	for($i = 0; $i < $size; $i++)
	{
	echo "<p>Ще си купя" . $array[$i] . "</p>";
	}
?>