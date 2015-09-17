<?php 
	require_once(dirname(__FILE__).'/Employee.php');
	require_once(dirname(__FILE__).'/Policeman.php');
	require_once(dirname(__FILE__).'/Doctor.php');
	
	$Policeman = new Policeman(168, 700, "Kapitan");
	
	$Policeman->HoursMoney();
	$Policeman->Rank();
	

	$Doctor = new Doctor(190, 1000, 20, 15);

	$Doctor->HoursMoney();
	$Doctor->Watch();



	$Doctor = new Doctor(150, 800);

	$Doctor->HoursMoney();
	$Doctor->Watch();
	
	

?>