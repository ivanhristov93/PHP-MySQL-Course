<?php
/*
"Дефинирайте клас Person който да има име, години и e-mail. Капсулирайте полетата на класа. За валидни данни приемете :
Име - повече от 3 символа
Години – положително число по-малко от 200
е - mail – повече от 3 символа
Дефинирайте функция която извежда в конзолата данните на човека.
Направете 3 обекта от тип Person и демонстрирайте функциите на класа."
*/

class Employee
{

    protected $HoursWorkPerMonth;
    protected $MonthlySalary;
    

    // This property should be in Police man only.
    protected $PoliceRank;
    
    protected $Night;
    protected $AllDay;

    public function __construct($HoursWorkPerMonth, $MonthlySalary)
    {
        $this->HoursWorkPerMonth = $HoursWorkPerMonth;
        $this->MonthlySalary = $MonthlySalary;
    }
    // This function is better to be in Doctor and in Policeman
    public function greet()
    {
        echo "$this->HoursWorkPerMonth <br />";
        echo "$this->MonthlySalary<br />";
        echo "$this->PoliceRank<br />";
        echo "$this->Night<br />";
        echo "$this->AllDay<br />";
    }
}
?>