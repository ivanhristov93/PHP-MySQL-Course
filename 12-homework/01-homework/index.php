<?php
require_once(dirname(__FILE__).'/Employee.php');
require_once(dirname(__FILE__).'/Policeman.php');
require_once(dirname(__FILE__).'/Doctor.php');

$Employee = new Employee(160, 500);
$Policeman = new Policeman("Capitan");
$Doctor = new Doctor(10, 15);

$Employee->greet();
$Policeman->greet();
$Doctor->greet();


?>