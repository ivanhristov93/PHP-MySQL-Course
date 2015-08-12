<?php
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
	echo "POST <pre>".print_r($_POST, true)."</pre>";


	function isValid($username, $pass, $repass, $secretQestion, $secretAnswer, $mail, $name, $fatherName, $gender, $birthdayDay)
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
		}	