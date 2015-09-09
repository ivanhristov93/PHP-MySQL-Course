<?php
class Person
{
    var $name;
    var $age;
    var $email;

    public function __construct($name, $age, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    function greet()
    {
        echo "<br />";
        echo "<strong>Здравей! Казвам се" . $this->name . ".</strong><br />";
        echo "<strong>Аз съм на" . $this->age . " години. </strong><br />";
        echo "<strong>Имейлът ми е" . $this->email . ".</strong><br />";
    }
}
?>