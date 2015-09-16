<?php
	for($a=1; $a <= 100; $a++)
	{
		echo "$a <br />";
	}
	if($a % 2 == 2)
	{
		echo "<span style=\"background-color:blue;\"> $a </span>";
	}
	if($a % 2 == 0)
	{
		echo "<span style=\"background-color:green;\"> $a </span>";
	}
	if($a % 7 == 7)
	{
		echo "<span style=\"background-color:blue;\"> bingo </span>";
	}