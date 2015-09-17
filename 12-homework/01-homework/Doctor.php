<?php 

require_once(dirname(__FILE__).'/Employee.php');

class Doctor extends Employee {
    
    protected $dayWatch;
    protected $nightWAtch;
    
    public function __construct($hoursPerMonth, $money, $dayWatch = 13, $nightWAtch = 15)
    {
        parent::__construct($hoursPerMonth, $money);
        $this->dayWatch = $dayWatch;
        $this->nightWAtch = $nightWAtch;
    }
    
    public function Watch()
    {
        echo "Доктора има $this->dayWatch дневни дежурства за месеца и <br />";
        echo "$this->nightWAtch нощни дежурства за месеца.<br /><br />";
    }
}
?>