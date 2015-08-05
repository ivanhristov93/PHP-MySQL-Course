<?php
	require_once "01phpFunctions-homework.php";
	for($i = 0; $i < 10; $i++)
	{
		$width = rand(1, 30);
		$height = rand(1, 20);
		
		$area = calculateTriangleArea($width, $height);
		
		echo "<div>Лицето на триъгълник със страна $width cm. и височина $height cm. е равено на $area cm<span class=\"sup\">2</span></div>";
		if($area <= 10)
		{
			echo "<span style=\"background-color:green;\">'$area'</span>";
		}
		if($area >=10 || $area <= 23)
		{
			echo "<span style=\"background-color:red;\">'$area'</span>";
		}
		if($area >23)
		{
			echo "<span style=\"background-color:blue;\">'$area'</span>";
		}
	}
	
	