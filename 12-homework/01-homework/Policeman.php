<?php

require_once(dirname(__FILE__).'/Employee.php');

class Policeman extends Employee
{

    protected $PoliceRank;

    public function __construct($PoliceRank)
    {
        $this->PoliceRank = $PoliceRank;
    }

    public function getPoliceRank()
    {
        return $this->PoliceRank;
    }
    public function setPolicerank()
    {
        $this->PoliceRank = $PoliceRank;
    }
}
?>
