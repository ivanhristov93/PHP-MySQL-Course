<?php 
	$myname = "ivan";
	echo $myname;
	$myfamily = "hristov";
	echo $myfamily;
	echo $myname ." ". $myfamily;
	
	echo "<br />";
	
	$dayofmonth = 23;
	if($dayofmonth > 25 || $dayofmonth == 23)
	{
		echo "Zaplatata e blizo";
	} 
	else 
	{
		echo "Zaplatata e daleche";
	}		
	
	echo "<br />";
	$a = 15;
	$b = 13;
	$b += $a;
	echo $b;
	 echo "<br />";
	 
	 $a = 15; 
	 $b = 13;
	 $a -= $b;
	 echo $a;
	echo "<br />";
	 $a = 15;
	 $b = 13;
	 $a *= $b;
	 echo $a;
?>	