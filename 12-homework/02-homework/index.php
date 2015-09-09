<?php
// Before commiting test your code!
require_once(dirname(__FILE__).'/person.php');

$pencho = new Person("Пенчо", 13, "minavamstanka@abv.bg");
$pencho->greet();

$maca = new Person("Маца", 23, "kaca@abv.bg");
$maca->greet();

$kaca = new Person("Каца", 33, "caca12@abv.bg");
$kaca->greet();

?>