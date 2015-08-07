<?php
	echo "<pre>";
	var_dump($_GET);
	echo "</pre>";
	echo "POST <pre>".print_r($_POST, true)."</pre>";
	
	
	
	function isValid($name)
	{
		if(mb_strlen($name, "UTF-8") > 3)
		{
			return true;
		}
		return false;
	}
	if(count($_POST) > 0)
	{
		$name = $_POST["name"];
		$name = strip_tags($name, "<br>");
		$name = trim ($name);
		$name = htmlspecialchars($name);
		?>
		<textarea><?=$name?></textarea>
		<?PHP
		if(isValid($name))
		{
			echo "<div>Gotov si</div>";	
		}
		else
		{
			echo "<div>Ne si gotov</div>";
		}
	}
	