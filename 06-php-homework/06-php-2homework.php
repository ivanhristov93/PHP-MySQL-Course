<?php
	$asdArr = array("name" => "Facebook", "web-site" => "https://www.facebook.com/");
			array("name" => "Zamunda", "web-site" => "http://www.zamunda.net/");
			array("name" => "Github", "web-site" => "https://github.com");
			array("name" => "YouTube", "web-site" => "https://www.youtube.com/");
			array("name" => "ABV", "web-site" => "http://www.abv.bg/");
    // Виждаме само първия а не вскички.

            echo "<dt> Ime na kompaniqta: </dt>";
		echo "<dd>" . $asdArr["name"]. "</dd>";

		echo "<dt> Site: </dt>";
		echo "<dd>" . $asdArr["web-site"] . "</dd>";
