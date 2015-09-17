<?php 
	require_once(dirname(__FILE__).'/person.php');
	
	$penka = new Person("Пенка", 23, "pena@abv.bg");
	$penka->details();
	
	$nastradin = new Person("Настрадин", 33, "nestea@gmail.com");
	$nastradin->details();

	$haralampi = new Person("Харалампи", 43, "haralampi@abv.bg");
	$haralampi->details();

?>