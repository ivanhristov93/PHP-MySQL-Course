<?php
	define("cols","4");
	define("rows", "5");
	echo constant("cols");
	echo constant("rows");

	for ($cols=1; $cols<4; $cols++)
	{
		$result= $cols;
		echo "$cols= $result";

			for($rows=1; $rows<4; $rows++)
			{
				$result= $rows;
				echo "$rows= $result";	
			}
	}