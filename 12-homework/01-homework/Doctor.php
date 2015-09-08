<?php

require_once(dirname(__FILE__).'/Employee.php');

class Doctor extends Employee
{

    protected $Night;
    protected $AllDay;

    public function __construct($Night, $AllDay)
    {
        $this->Night = $Night;
        $this->AllDay = $AllDay;
    }

    public function getNight()
    {
        return $this->Night;
    }
    public function setNight()
    {
        $this->Night = $Night;
    }
    public function getAllDay()
    {
        return $this->AllDay;
    }
    public function setAllDay()
    {
        $this->AllDay = $AllDay;
    }
}
?>