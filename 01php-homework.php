<?php
	$first_arr = array("BMW", "Mercedes", "Seat", "Renault", "Opel", "Mazda");
	$size = count($first_arr);
	for($i = 0; $i < $size; $i++)
	{
		echo "<p>Iskam da si kupq BMW" . $first_arr[$i] . "</p>";
		echo "<p>Iskam da si kupq Mercedes" . $first_arr[$i] . "</p>";
		echo "<p>Iskam da si kupq Seat" . $first_arr[$i] . "</p>";
		echo "<p>Iskam da si kupq Renault" . $first_arr[$i] . "</p>";
		echo "<p>Iskam da si kupq Opel" . $first_arr[$i] . "</p>";
		echo "<p>Iskam da si kupq Mazda" . $first_arr[$i] . "</p>";
	}