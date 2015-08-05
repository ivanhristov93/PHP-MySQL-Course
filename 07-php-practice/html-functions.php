<?php
	function multiply(&$number, $multiplier)
	{
		$number *= $multiplier;
	}

	
function printHeader($title = null)
{
	global $DEFAULT_HEADER;
	if (!isset($title))
	{
		$title = $DEFAULT_HEADER;
	}
	echo $title;
}


function incrementVar()
{
	static $count = 1;
	$count *= 2;
	echo $count;
}