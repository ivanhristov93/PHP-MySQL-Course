<?php
	define("COLS", 4);
	define("ROWS", 5);


	echo "<table border='1'>";
	
	
	for($i=1; $i <= COLS; $i++ )
	{
		echo "<tr>";
		for($a=1; $a <= ROWS; $a++ )
		{
			echo "<td>$i, $a</td>";
			
		}
		echo "</tr>";
	}
	echo "</table>";
?>