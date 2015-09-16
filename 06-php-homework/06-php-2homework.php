<!DOCTYPE html>
<html>
<body>
<table border="1">
	<?php
		$array = array(
				"name" => "Facebook", "web-site" => "https://www.facebook.com"
				);

    // Виждаме само първия а не вскички.
		//Както и да го въртя не се получи и само това измислих, колкото и грозно да е.
		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
		echo "</tr>";
    	}

    	$array = array(
				"name" => "GIT", "web-site" => "https://www.github.com"
				);

		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
		echo "</tr>";
    	}

		$array = array(
				"name" => "ABV", "web-site" => "https://www.abv.bg"
				);

		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
		echo "</tr>";
    	}		

    	$array = array(
				"name" => "Zamunda", "web-site" => "https://www.zamunda.net"
				);

		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
		echo "</tr>";
    	}

    	$array = array(
				"name" => "YouTube", "web-site" => "https://www.youtube.com"
				);

		foreach ($array as $key => $value) {
		echo "<tr>";
		echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
		echo "</tr>";
    	}

	?>
</table>
</body>
</html>

