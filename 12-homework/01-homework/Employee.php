<?php
class Employee
{

    protected $HoursWorkPerMonth;
    protected $MonthlySalary;
    protected $PoliceRank;
    protected $Night;
    protected $AllDay;

    public function __construct($HoursWorkPerMonth, $MonthlySalary)
    {
        $this->HoursWorkPerMonth = $HoursWorkPerMonth;
        $this->MonthlySalary = $MonthlySalary;
    }
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