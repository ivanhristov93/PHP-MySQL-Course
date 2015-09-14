<?php
	
	function calculation($a, $word) 
	{
		$num = strlen($word);
		if($num % 2)
		{
			$a+=12;
		}
		else
		{
			$a-=3;
		}
		if ($a>10)
		{
			$a-=22;
		}
		if ($a<0)
		{
			$a+=14;
		}
		echo $a;
		echo "<br>";
	}
	echo calculation(14, 'bomb');
	echo calculation(14, 'post');
	echo calculation(14, 'haralampi');
	echo calculation(14, 'televizor');
	echo calculation(14, 'kastofon');
	echo calculation(14, 'minavamstanka');
?>