<?php
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
	echo "POST <pre>".print_r($_POST, true)."</pre>";
	
	function isValid($username, $oldPass, $newPass, $rePass)
		{
			if(mb_strlen($username="first-user", $oldPass="money", $newPass, $rePass) > 4)
			{
			return true;
			}
			return false;
		}
		if(count($_POST) > 0)
		{
			$username = $_POST["username"];
			$username = strip_tags($username, "<br>");
			$username = trim ($username);
			$username = htmlspecialchars($username);
		}	
		if(isValid($username, $oldPass, $newPass, $rePass))
		{
			echo "<div>Успешна смяна!</div>";	
		}
		else
		{
			echo "<div>Грешка!</div>";
		}