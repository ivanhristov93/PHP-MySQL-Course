<!doctype html>
<html>
<head>
<title>Калкулатор</title>
<link rel=StyleSheet media="screen" type="text/css" href="style.css" />
</head>
<body>
	<font color="#CC0000">Calculator</font>
		<div id="form1">
			<form action="data.php?2" method="GET">
				<input name="first" type="text" size="10" maxlength="9" >+ 
				<input name="second" type="text" size="10" maxlength="9">= 
				<input type="submit" name="submit" value="Равно на..."> 
			</form>
		</div>
		//Колкото можах го докарах оставих само събирането, защото нещо не мога да си поправя грешката, и ако може малко помощ да го оправя и да добавя други действия.
		<?php

			$num1 = "first";
	
			$num2 = "second";
	
			$result = Calculate($num1, $num2);

			function Calculate($first, $second)
			{
				$result=($first+$second);
				print_r($result	);
			}
		?>		
</body>
</html>