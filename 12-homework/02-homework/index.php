<?php
/*
"Дефинирайте клас Person който да има име, години и e-mail. Капсулирайте полетата на класа. За валидни данни приемете :
Име - повече от 3 символа
Години – положително число по-малко от 200
е - mail – повече от 3 символа
Дефинирайте функция която извежда в конзолата данните на човека.
Направете 3 обекта от тип Person и демонстрирайте функциите на класа."*/

// Before commiting test your code!
require_once(dirname(__FILE__).'/person.php');

$pencho = new Person("Пенчо", 13, "minavamstanka@abv.bg");
$pencho->greet();

$maca = new Person("Маца", 23, "kaca@abv.bg");
$maca->greet();

$kaca = new Person("Каца", 33, "caca12@abv.bg");
$kaca->greet();

?>