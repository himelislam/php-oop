<?php

class Person {
    private $name;
    private $age;

    public function __construct($name)
    {
        $this-> name = $name;   
    }

    public function setAge($age){
        if($age < 18){
            throw new Exception('Person is not old Enough');
        }
        $this->age = $age;
    }

}

$john = new Person('John Doe');
$john->age = 15;
// $john->setAge(15);

var_dump($john);