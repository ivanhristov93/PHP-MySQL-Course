<?php 

require_once(dirname(__FILE__).'/Employee.php');

class Policeman extends Employee {
    
    protected $rank;
    
    public function __construct($hoursPerMonth, $money, $rank)
    {
        parent::__construct($hoursPerMonth, $money);
        $this->rank = $rank;
    }
    
    public function Rank()
    {
        echo "Полицаят е с ранк: $this->rank <br /> <br />";
    }
}
?>