<?php
/*
"Направете клас Employee който съдържа базовите характеристики за един работник: часове работа, на месец и месечна заплата
Направете клас Policeman, който наследява Employee и добавя поле за полицейския ранк на дадения полицай
Направете клас Doctor, който наследява Employee и добавя полета за броя нощни и броя целодневни дежурства на месец
Направете нужните get/set методи както и методи за извеждане на информацията за обектите в конзолата"
*/
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